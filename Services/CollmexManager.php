<?php

namespace CoffeeBike\CollmexBundle\Services;

use CoffeeBike\CollmexBundle\Entity\Request;
use CoffeeBike\CollmexBundle\Entity\Response;
use CoffeeBike\CollmexBundle\Entity\Invoice;
use CoffeeBike\CollmexBundle\Entity\Product;
use CoffeeBike\CollmexBundle\Entity\ProductGroup;
use CoffeeBike\CollmexBundle\Entity\ResponseMessage;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;


class CollmexManager
{

    private $credentials = array(
        "user" => null,
        "password" => null,
        "customerId" => null,
    );


    public function __construct($user, $password, $customerId)
    {
        $this->credentials['user'] = $user;
        $this->credentials['password'] = $password;
        $this->credentials['customerId'] = $customerId;
    }

    public function send(Request $request)
    {

        $curl = cURL_init(
            "https://www.collmex.de/cgi-bin/cgi.exe?" . $this->credentials['customerId'] . ",0,data_exchange"
        );
        cURL_setopt($curl, CURLOPT_POST, 1);
        cURL_setopt($curl, CURLOPT_POSTFIELDS, $this->prepareData($request->getData()));
        cURL_setopt($curl, CURLOPT_HTTPHEADER, Array("Content-Type: text/csv"));
        cURL_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        cURL_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $message = curl_exec($curl); //returns true or false
        cURL_close($curl);

        $message = utf8_encode($message);
        // TODO: Better handling of csv file!
        $tmpHandle = tmpfile();
        fwrite($tmpHandle, $message);
        rewind($tmpHandle);
        $responseObjects = array();
        $responseMessages = array();
        while ($line = fgetcsv($tmpHandle, 0, ';', '"')) {
            if ($line[0] == "MESSAGE") {
                $responseMessages[] = $line;
            } else {
                $responseObjects[] = $line;
            }

        }

        fclose($tmpHandle);

        try {
            $response = new Response();

            foreach ($responseMessages as $responseMessage) {
                $message = new ResponseMessage();

                $message->setTypeIdentifier($responseMessage[0]);
                $message->setStatus($responseMessage[1]);
                $message->setCode($responseMessage[2]);
                $message->setText($responseMessage[3]);

                if (array_key_exists(4, $responseMessage)) {
                    $message->setLine($responseMessage[4]);
                }

                $response->addMessage($message);
            }

            foreach ($responseObjects as $object) {
                $response->addObject($object);
            }

            return $response;
        } catch (\Exception $e) {
            echo $e->getMessage();

            return false;
        }
    }

    public function prepareData($data)
    {
        $strCSV = "LOGIN;" . $this->credentials['user'] . ";" . $this->credentials['password'] . "\n";

        if (is_array($data)) {
            if ($this->containsOnlyObjects($data)) {
                foreach ($data as $obj) {
                    foreach ($obj->getData() as $field) {
                        $strCSV .= $field . ";";
                    }
                    $strCSV .= "\n";
                }
                $strCSV = substr($strCSV, 0, -2); // Delete \n from CSV
            } else {
                foreach ($data as $field) {
                    $strCSV .= $field . ";";
                }
            }
        } else {
            foreach ($data->getData() as $field) {
                $strCSV .= $field . ";";
            }
        }

        return utf8_decode($strCSV);
    }

    public function getProduct($prodNo = null, $prodGroup = null, $priceGroup = null, $onlyModified = 0, $shopId = null, $onlyWithPrice = 0, $companyId = 1)
    {
        $request = new Request([
            'PRODUCT_GET',
            $companyId,
            $prodNo,
            $prodGroup,
            $priceGroup,
            $onlyModified,
            'eFIS',
            $shopId,
            $onlyWithPrice,
        ]);

        $response = $this->send($request);

        return $response->getObjects()[0];
    }

    public function getProductGroups()
    {
        $request = new Request([
            'PRODUCT_GROUPS_GET',
        ]);

        $response = $this->send($request);

        return $response->getObjects();
    }

    public function getProducts($prodGroup = null, $priceGroup = null, $onlyModified = 0, $shopId = null, $onlyWithPrice = 0, $companyId = 1)
    {
        $request = new Request([
            'PRODUCT_GET',
            $companyId,
            '',
            $prodGroup,
            $priceGroup,
            $onlyModified,
            'eFIS',
            $shopId,
            $onlyWithPrice,
        ]);

        $response = $this->send($request);

        return $response->getObjects();
    }

    public function getStockInfo($onlyModified = 0, $companyId = 1, $systemName = 'CoffeeBikeCollmexBundle')
    {
        $request = new Request([
            'STOCK_AVAILABLE_GET',
            $companyId,
            '',
            $onlyModified,
            $systemName,
        ]);

        $response = $this->send($request);

        return $response->getObjects();
    }

    public function getProductStockInfo($productId, $onlyModified = 0, $companyId = 1, $systemName = 'CoffeeBikeCollmexBundle')
    {
        $request = new Request([
            'STOCK_AVAILABLE_GET',
            $companyId,
            $productId,
            $onlyModified,
            $systemName,
        ]);

        $response = $this->send($request);

        return $response->getObjects();
    }

    public function getInvoice($invoiceNo = null, $customerNo = null, $from = null, $to = null, $onlyIssued = 0, $onlyModified = 0, $onlyCreatedWithThisAPI = 0, $companyId = 1)
    {
        $request = new Request([
            'INVOICE_GET',
            $invoiceNo,
            $companyId,
            $customerNo,
            $from,
            $to,
            $onlyIssued,
            0,
            $onlyModified,
            'eFIS',
            $onlyCreatedWithThisAPI,
            0,
        ]);

        $response = $this->send($request);

        return $response->getObjects()[0];
    }

    public function getInvoices($customerNo = null, $from = null, $to = null, $onlyIssued = 0, $onlyModified = 0, $onlyCreatedWithThisAPI = 0, $companyId = 1)
    {
        $request = new Request([
            'INVOICE_GET',
            '',
            $companyId,
            $customerNo,
            $from,
            $to,
            $onlyIssued,
            0,
            $onlyModified,
            'eFIS',
            $onlyCreatedWithThisAPI,
            0,
        ]);

        $response = $this->send($request);

        return $response->getObjects();
    }

    public function postOrder($orderId = null, $collmexId, $companyId = 1, $productId, $productQuantity, $shippingCosts)
    {
        $request = new Request([
            'type_identifier'                => 'CMXORD-2',
            'order_id'                       => $orderId,
            'position'                       => null,
            'order_type'                     => null,
            'client_id'                      => $companyId,
            'customer_id'                    => $collmexId,
            'customer_salutation'            => null,
            'customer_title'                 => null,
            'customer_forename'              => null,
            'customer_lastname'              => null, // 10
            'customer_firm'                  => null,
            'customer_department'            => null,
            'customer_street'                => null,
            'customer_zipcode'               => null,
            'customer_city'                  => null,
            'customer_country'               => null,
            'customer_phone'                 => null,
            'customer_phone_2'               => null,
            'customer_fax'                   => null,
            'customer_email'                 => null, // 20
            'customer_bank_account'          => null,
            'customer_bank_code'             => null,
            'customer_bank_account_owner'    => null,
            'customer_bank_iban'             => null,
            'customer_bank_bic'              => null,
            'customer_bank_name'             => null,
            'customer_vat_id'                => null,
            'reserved'                       => null,
            'customer_order_id'              => null,
            'order_date'                     => null, // 30
            'price_date'                     => null,
            'terms_of_payment'               => null,
            'currency'                       => null,
            'price_group'                    => null,
            'discount_id'                    => null,
            'discount_final'                 => null,
            'discount_reason'                => null,
            'confirmation_text'              => null,
            'final_text'                     => null,
            'internal_memo'                  => null, // 40
            'partial_invoices'               => null,
            'partial_shipping'               => null,
            'deleted'                        => null,
            'status'                         => null,
            'language'                       => null,
            'employee_id'                    => null,
            'agent_id'                       => null,
            'system_name'                    => null,
            'discount_final_2'               => null,
            'discount_final_2_reason'        => null, // 50
            'reserved_2'                     => null,
            'canceled_at'                    => null,
            'shipping_type'                  => null,
            'shipping_costs'                 => $shippingCosts,
            'cod_costs'                      => null,
            'delivery_conditions'            => null,
            'delivery_conditions_additional' => null,
            'delivery_salutation'            => null,
            'delivery_title'                 => null,
            'delivery_forename'              => null, // 60
            'delivery_lastname'              => null,
            'delivery_firm'                  => null,
            'delivery_department'            => null,
            'delivery_street'                => null,
            'delivery_zipcode'               => null,
            'delivery_city'                  => null,
            'delivery_country'               => null,
            'delivery_phone'                 => null,
            'delivery_phone_2'               => null,
            'delivery_fax'                   => null, // 70
            'delivery_email'                 => null,
            'position_type'                  => null,
            'product_id'                     => $productId,
            'product_description'            => null,
            'quantity_unit'                  => null,
            'quantity'                       => $productQuantity,
            'price'                          => null,
            'delivery_date'                  => null,
            'price_quantity'                 => null,
            'position_discount'              => null, // 80
            'position_value'                 => null,
            'product_type'                   => null,
            'tax_rate'                       => null,
            'foreign_tax'                    => null,
            'revenue_type'                   => "2",
            'shipped_final'                  => null,
            'billed_final'                   => null,
            'revenue'                        => null,
            'costs'                          => null,
            'gross_profit'                   => null, // 90
            'margin'                         => null,
        ]);

        $response = $this->send($request);

        return $response->getMessages()[0];
    }

    private function containsOnlyObjects($data) {

        foreach ($data as $element) {
            if (is_object($element)) {
                return true;
            }
            return false;
        }
    }




}