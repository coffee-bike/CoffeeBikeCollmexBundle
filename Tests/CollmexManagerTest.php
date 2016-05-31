<?php

namespace CoffeeBike\CollmexBundle\Tests\Services;

use CoffeeBike\CollmexBundle\Models\Invoice;
use CoffeeBike\CollmexBundle\Models\Product;
use CoffeeBike\CollmexBundle\Models\Request;
use CoffeeBike\CollmexBundle\Models\Response;
use CoffeeBike\CollmexBundle\Services\CollmexManager;

class CollmexManagerTest extends \PHPUnit_Framework_TestCase
{
    private $cm;

    public function setUp()
    {
        $this->cm = new CollmexManager('USER', 'PASSWORD', 'CUSTOMERID');
    }

    public function testPrepareData()
    {
        $request = new Request([
            'PRODUCT_GET',
            '1',
            '1000',
        ]);

        $data = $this->cm->prepareData($request);

        $this->assertContains('PRODUCT_GET;1;1000', $data);
    }

    public function testRequest()
    {
        $request = new Request([
            'PRODUCT_GET',
            '1',
            '1000',
        ]);

        $this->cm->send($request);
    }

    public function testResponseMessages()
    {
        $request = new Request([
            'PRODUCT_GET',
            '1',
            '1000',
        ]);

        $response = $this->cm->send($request);

        $this->assertCount(2, $response->getMessages());
    }

    public function testResponseObjects()
    {
        $request = new Request([
            'PRODUCT_GET',
            '1',
            '1000',
        ]);

        $response = $this->cm->send($request);

        $this->assertCount(1, $response->getObjects());
    }

    public function testGetProduct()
    {
        $product = $this->cm->getProduct(1000);

        $this->assertTrue($product instanceof Product);
        $this->assertEquals('Coffee-Bike', $product->getField('product_name'));
    }

    public function testGetProductGroup()
    {
        $groups = $this->cm->getProductGroups();

    }

    public function testSetData()
    {
        $response = new Response();

        $aData = array(
            'PRDGRP',
            1,
            'Test',
            null,
        );

        print_r($aData);

        $response->addObject($aData);
    }

    /*
    public function testGetInvoice()
    {
        $testData = array(
            'set_type' => 'INVOICE_GET',
            'invoice_id' => null,
            'client_id' => null,
            'customer_id' => 10623,
            'invoice_date_begin' => null,
            'invoice_date_end' => null,
            'only_sent' => null,
            'format' => null,
            'only_changed' => null,
            'system_name' => null,
            'system_generated' => null,
            'no_stationery' => null,
        );


        $invoice = $this->cm->getInvoice($testData);
        print_r($invoice);
    }

    public function testProduct()
    {
        $product = $this->cm->getProducts();

    }

    public function testRequest()
    {
        $testType = new TestType();
        $testType->template = array(
            'CUSTOMER_GET',
            '9999',
            '1',
        );

        // CollmexResult object
        $result = $this->cm->sendRequest([$testType]);

        $this->assertEquals('MESSAGE', $result->get('type_identifier'));
        $this->assertEquals('S', $result->get('status'));
        $this->assertNotNull($result->get('code'));
        $this->assertNotNull($result->get('text'));
       // $this->assertTrue($result->get('line'));

        //$this->assertEquals('Allgemeiner Geschäftspartner', $result->getResponse()[0]->get('name'));
    }

            /*
            public function testCreateInvoice()
            {
                $invoice['marketing'] = new Invoice();
                $invoice['marketing']->setInvoiceData(array(
                    'invoice_id' => -1,
                    'position' => null,
                    'client_id' => 1,
                    'customer_id' => 9999, //$sm->getCollmexId($monthlyReport->getStore()->getCompany()),
                    'invoice_type' => 0,
                    'invoice_text' => 'Test ÄÜÖß', //TODO: Invoice text
                    'language' => 0, // TODO: Language
                    'employee_id' => null,
                    'system_name' => 'eFIS',
                    'status' => 10,
                    'position_type' => 0,
                    'product_id' => 1, //$monthlyReport->getStore()->getCompany()->getCountry()->getProdNoMarketing(),
                    'quantity' => 1,
                    'foreign_tax' => 0,
                ));

                $result = $this->cm->sendRequest($invoice);
            }
    */

}