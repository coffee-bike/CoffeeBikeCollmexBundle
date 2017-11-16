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

    public function getProductPrices($productId, $productGroup = null, $inactive = 1, $companyId=1)
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

    private function containsOnlyObjects($data) {

        foreach ($data as $element) {
            if (is_object($element)) {
                return true;
            }
            return false;
        }
    }




}