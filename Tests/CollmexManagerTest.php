<?php

namespace CoffeeBike\CollmexBundle\Tests\Services;

use CoffeeBike\CollmexBundle\Entity\Invoice;
use CoffeeBike\CollmexBundle\Entity\Product;
use CoffeeBike\CollmexBundle\Entity\ProductGroup;
use CoffeeBike\CollmexBundle\Entity\Request;
use CoffeeBike\CollmexBundle\Entity\Response;
use CoffeeBike\CollmexBundle\Services\CollmexManager;

class CollmexManagerTest extends \PHPUnit_Framework_TestCase
{
    private $cm;

    public function setUp()
    {
        $this->cm = new CollmexManager('USER', 'PASSWORD', '137944');
    }

    public function testPrepareData()
    {
        $request = new Request([
            'PRODUCT_GET',
            '1',
            '1000',
        ]);

        $data = $this->cm->prepareData($request->getData());

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
        $this->assertEquals('Test', $product->getField('product_name'));
    }

    public function testGetProductGroup()
    {
        $groups = $this->cm->getProductGroups();

        $this->assertNotNull($groups);

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

        $response->addObject($aData);
    }

    public function testCollmexObject()
    {
        $group = new ProductGroup();

        $group->setField('name', 'Test');

        $this->assertEquals('Test', $group->getField('name'));
    }

    public function testCreateInvoice()
    {
        $invoice = new Invoice();
        $invoice->setField('invoice_id', '-1');
        $invoice->setField('position', '1');
        $invoice->setField('client_id', '1');
        $invoice->setField('invoice_type', '0');
        $invoice->setField('customer_id', '9999');
        $invoice->setField('invoice_text', 'Text');
        $invoice->setField('language', '0');
        $invoice->setField('system_name', 'CoffeeBikeCollmexBundle');
        $invoice->setField('status', '10');
        $invoice->setField('position_type', '0');
        $invoice->setField('product_id', '1000');
        $invoice->setField('quantity', '1');
        $invoice->setField('foreign_tax', '0');

        $response = $this->cm->send(new Request($invoice));

        $this->assertEquals('S', $response->getMessages()[0]->getStatus());
        $this->assertEquals('Datenübertragung erfolgreich. Es wurden 1 Datensätze verarbeitet.', $response->getMessages()[0]->getText());
    }

    public function testCreateInvoices()
    {
        $invoice[0] = new Invoice();
        $invoice[0]->setField('invoice_id', '-1');
        $invoice[0]->setField('position', '1');
        $invoice[0]->setField('client_id', '1');
        $invoice[0]->setField('invoice_type', '0');
        $invoice[0]->setField('customer_id', '9999');
        $invoice[0]->setField('invoice_text', 'Text');
        $invoice[0]->setField('language', '0');
        $invoice[0]->setField('system_name', 'CoffeeBikeCollmexBundle');
        $invoice[0]->setField('status', '10');
        $invoice[0]->setField('position_type', '0');
        $invoice[0]->setField('product_id', '1000');
        $invoice[0]->setField('quantity', '1');
        $invoice[0]->setField('foreign_tax', '0');

        $invoice[1] = new Invoice();
        $invoice[1]->setField('invoice_id', '-1');
        $invoice[1]->setField('position', '2');
        $invoice[1]->setField('client_id', '1');
        $invoice[1]->setField('invoice_type', '0');
        $invoice[1]->setField('customer_id', '9999');
        $invoice[1]->setField('invoice_text', 'Text');
        $invoice[1]->setField('language', '0');
        $invoice[1]->setField('system_name', 'CoffeeBikeCollmexBundle');
        $invoice[1]->setField('status', '10');
        $invoice[1]->setField('position_type', '0');
        $invoice[1]->setField('product_id', '1000');
        $invoice[1]->setField('quantity', '1');
        $invoice[1]->setField('foreign_tax', '0');

        $response = $this->cm->send(new Request($invoice));

        $this->assertEquals('S', $response->getMessages()[0]->getStatus());
        $this->assertEquals('Datenübertragung erfolgreich. Es wurden 2 Datensätze verarbeitet.', $response->getMessages()[0]->getText());
    }

    public function testGetInvoice()
    {
        $invoice = $this->cm->getInvoice(1);

        $this->assertEquals('Test', $invoice->getField('product_description'));
    }

}