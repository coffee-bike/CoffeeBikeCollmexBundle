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
        $responseNewObjectIds = array();
        while ($line = fgetcsv($tmpHandle, 0, ';', '"')) {
            if ($line[0] == "MESSAGE") {
                $responseMessages[] = $line;
            } elseif ($line[0] == "NEW_OBJECT_ID") {
                $responseNewObjectIds[] = $line;
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

            foreach ($responseNewObjectIds as $newObjectId) {
                $response->addNewObjectId($newObjectId);
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

    public function getProductPrices($productId, $productGroup = null, $inactive = 1, $companyId = 1)
    {
        $request = new Request([
            'PRODUCT_PRICE_GET',
            $companyId,
            $productId,
            $productGroup,
            $inactive,
        ]);
        $response = $this->send($request);

        return $response->getObjects();
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

    public function getOrder($orderId, $companyId = 1)
    {
        $request = new Request([
            'SALES_ORDER_GET',
            $orderId,
            $companyId,
            '',
            '',
            '',
            '',
            '',
            '',
            'eFIS',
            '',
            '',
        ]);

        $response = $this->send($request);

        return $response->getObjects();
    }

    public function getPriceGroups($companyId = 1)
    {
        $request = new Request([
            'PRICE_GROUPS_GET',
            $companyId,
        ]);

        $response = $this->send($request);

        return $response->getObjects();
    }
    public function getVendorAgreement($productId, $validDate, $companyId = 1, $vendorId = null,  $inactive = 1, $changed = 0)
    {
        $request = new Request([
            'VENDOR_AGREEMENT_GET',
            $companyId,
            $vendorId,
            $productId,
            '',
            $validDate,
            $inactive,
            $changed,
            'eFis'
        ]);

        $response = $this->send($request);

        return $response->getObjects();
    }

    public function getAccountingTransactions($transaction_id = null, $company_id = 1, $financial_year = null, $bank_account_number = null,
                                              $cost_location = null, $customer_id = null, $supplier_id = null, $annex_id = null, $bill_id = null,
                                              $travel_id = null, $text = null, $slip_date_from = null, $slip_date_to = null, $cancellations = null,
                                              $changes = null, $system_name = null)
    {
        $request = new Request([
            'ACCDOC_GET',
            $transaction_id,
            $company_id,
            $financial_year,
            $bank_account_number,
            $cost_location,
            $customer_id,
            $supplier_id,
            $annex_id,
            $bill_id,
            $travel_id,
            $text,
            $slip_date_from,
            $slip_date_to,
            $cancellations,
            $changes,
            $system_name
        ]);

        $response = $this->send($request);

        return $response->getObjects();
    }

    public function getCheckBalance($company_id = null, $financial_year = null, $date_until = null, $bank_account_number = null, $bank_account_group = null,
                                    $customer_id = null, $supplier_id = null, $cost_location = null)
    {
        $request = new Request([
            'ACCBAL_GET',
            $company_id,
            $financial_year,
            $date_until,
            $bank_account_number,
            $bank_account_group,
            $customer_id,
            $supplier_id,
            $cost_location

        ]);

        $response = $this->send($request);

        return $response->getObjects();
    }

    public function getInvoicePayment($company_id = null, $bill_id = null, $new_payments = null, $system_name = null)
    {
        $request = new Request([
            'INVOICE_PAYMENT_GET',
            $company_id,
            $bill_id,
            $new_payments,
            $system_name

        ]);
        $response = $this->send($request);

        return $response->getObjects();
    }

    public function getStock($company_id = null, $product_id = null, $product_group = null, $text = null, $type = null)
    {
        $request = new Request([
            'STOCK_GET',
            $company_id,
            $product_id,
            $product_group,
            $text,
            $type
        ]);
        $response = $this->send($request);

        return $response->getObjects();
    }

    public function getStockChange($company_id = null, $product_id = null, $date_from = null, $date_until = null, $customer_id = null,
                                   $supplier_id = null, $cancellations = null, $changes_only = null, $system_name = 'efis')
    {
        $request = new Request([
            'STOCK_CHANGE_GET',
            $company_id,
            $product_id,
            $date_from,
            $date_until,
            $customer_id,
            $supplier_id,
            $cancellations,
            $changes_only,
            $system_name
        ]);
        $response = $this->send($request);

        return $response->getObjects();
    }

    public function getBatch($company_id = null, $batch_id = null, $product_id = null, $text = null, $changes_only = null, $system_name = 'efis')
    {
        $request = new Request([
            'BATCH_GET',
            $company_id,
            $batch_id,
            $product_id,
            $text,
            $changes_only,
            $system_name
        ]);
        $response = $this->send($request);

        return $response->getObjects();
    }

    public function getQuotation($offer_id = null, $company_id = null, $customer_id = null, $offer_date_from = null, $offer_id_until = null,
                                    $dont_use_letter_paper = null, $return_format = null, $changes_only = null, $system_name = 'efis')
    {
        $request = new Request([
           'QUOTATION_GET',
            $offer_id,
            $company_id,
            $customer_id,
            $offer_date_from,
            $offer_id_until,
            $dont_use_letter_paper,
            $return_format,
            $changes_only,
            $system_name
        ]);
        $response = $this->send($request);

        return $response->getObjects();
    }

    public function getDelivery($delivery_id = null, $company_id = null, $customer_id = null, $delivery_date_from = null,
                                $delivery_date_until = null, $changed_only = null, $system_name = 'efis', $dont_use_letter_paper = null,
                                $customer_order_id = null)
    {
        $request = new Request([
            'DELIVERY_GET',
            $delivery_id,
            $company_id,
            $customer_id,
            $delivery_date_from,
            $delivery_date_until,
            $changed_only,
            $system_name,
            $dont_use_letter_paper,
            $customer_order_id
        ]);
        $response = $this->send($request);

        return $response->getObjects();
    }

    public function getPurchaseOrder($supplier_order_id = null, $company_id = null, $supplier_id = null, $product_id = null,
                                     $handed_out_only = null, $return_format = null, $changed_only = null, $system_name = 'efis',
                                     $dont_use_letter_paper = null)
    {
        $request = new Request([
            'PURCHASE_ORDER_GET',
            $supplier_order_id,
            $company_id,
            $supplier_id,
            $product_id,
            $handed_out_only,
            $return_format,
            $changed_only,
            $system_name,
            $dont_use_letter_paper
        ]);
        $response = $this->send($request);

        return $response->getObjects();
    }

    public function getCustomer($customer_id = null, $company_id = null, $text = null, $due_resubmission = null, $postal_code_land = null,
                                $address_group = null, $price_group = null, $discount_group = null, $intermediary = null, $changed_only = null,
                                 $system_name = 'efis', $inactive = null)
    {
        $request = new Request([
            'CUSTOMER_GET',
            $customer_id,
            $company_id,
            $text,
            $due_resubmission,
            $postal_code_land,
            $address_group,
            $price_group,
            $discount_group,
            $intermediary,
            $changed_only,
            $system_name,
            $inactive
        ]);
        $response = $this->send($request);

        return $response->getObjects();
    }

    public function getCustomerAgreement($company_id = null, $customer_id = null, $product_id = null, $validity_date = null,
                                         $inactive = null, $changes_only = null, $system_name = 'efis')
    {
        $request = new Request([
            'CUSTOMER_AGREEMENT_GET',
            $company_id,
            $customer_id,
            $product_id,
            $validity_date,
            $inactive,
            $changes_only,
            $system_name
        ]);
        $response = $this->send($request);

        return $response->getObjects();
    }

    public function getVendor($supplier_id = null, $company_id = null, $text = null, $due_resubmission = null, $postal_code_country = null,
                                $changes_only = null, $system_name = 'efis')
    {
        $request = new Request([
            'VENDOR_GET',
            $supplier_id,
            $company_id,
            $text,
            $due_resubmission,
            $postal_code_country,
            $changes_only,
            $system_name
        ]);
        $response = $this->send($request);

        return $response->getObjects();
    }

    public function getAbo($customer_id = null, $company_id = null, $product_id = null, $next_bill_from = null, $next_bill_until = null,
                            $valid_from = null, $changed_only = null, $system_name = 'efis')
    {
        $request = new Request([
            'ABO_GET',
            $customer_id,
            $company_id,
            $product_id,
            $next_bill_from,
            $next_bill_until,
            $valid_from,
            $changed_only,
            $system_name
        ]);
        $response = $this->send($request);

        return $response->getObjects();
    }

    public function getAddress($address_id = null, $address_type = null, $text = null, $due_resubmission = null, $postal_code_country = null,
                                $address_group = null, $changes_only = null, $system_name = 'efis', $contact_person = null, $company_id = null)
    {
        $request = new Request([
            'ADDRESS_GET',
            $address_id,
            $address_type,
            $text,
            $due_resubmission,
            $postal_code_country,
            $address_group,
            $changes_only,
            $system_name,
            $contact_person,
            $company_id
        ]);
        $response = $this->send($request);

        return $response->getObjects();
    }

    public function getContacts($address_id = null, $address_type = null, $text = null)
    {
        $request = new Request([
            'CONTACTS_GET',
            $address_id,
            $address_type,
            $text
        ]);
        $response = $this->send($request);

        return $response->getObjects();
    }

    public function getAddressGroup()
    {
        $request = new Request([
            'ADDRESS_GROUP_GET'
        ]);
        $response = $this->send($request);

        return $response->getObjects();
    }

    private function containsOnlyObjects($data)
    {

        foreach ($data as $element) {
            if (is_object($element)) {
                return true;
            }
            return false;
        }
    }


}