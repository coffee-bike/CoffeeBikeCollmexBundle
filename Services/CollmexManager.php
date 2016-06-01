<?php

namespace CoffeeBike\CollmexBundle\Services;

use CoffeeBike\CollmexBundle\Models\Request;
use CoffeeBike\CollmexBundle\Models\Response;
use CoffeeBike\CollmexBundle\Models\Invoice as Invoice;
use CoffeeBike\CollmexBundle\Models\Product;
use CoffeeBike\CollmexBundle\Models\ProductGroup;
use CoffeeBike\CollmexBundle\Models\ResponseMessage;
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
        cURL_setopt($curl, CURLOPT_POSTFIELDS, $this->prepareData($request));
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

        // TODO: Remove duplicated code!
        if (is_array($data)) {
            foreach ($data as $obj) {
                foreach ($obj->getData() as $field) {
                    $strCSV .= $field . ";";
                }
                $strCSV .= "\n";
            }
        } else {
            foreach ($data->getData() as $field) {
                $strCSV .= $field . ";";
            }
            $strCSV .= "\n";
        }

        $strCSV = substr($strCSV, 0, -2); // Delete \n from CSV

        return utf8_decode($strCSV);
    }

    public function getProduct($prodNo, $prodGroup = null, $priceGroup = null, $onlyModified = 0, $shopId = null, $onlyWithPrice = 0, $companyId = 1)
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

    public function getInvoice($invoiceNo, $customerNo, $from = null, $to = null, $onlyIssued = 0, $onlyModified = 0, $onlyCreatedWithThisAPI = 0, $companyId = 1)
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

    


}