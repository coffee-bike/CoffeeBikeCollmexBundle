<?php
/**
 * Company: Coffee-Bike GmbH
 * User: Jannik Kröger
 * Date: 09.02.16
 * Time: 16:51
 */

namespace CoffeeBike\CollmexBundle\Entity;


class Response
{
    private $messages = array();
    private $objects = array();
    private $newObjectIds = array();

    public function addObject($aData)
    {
        switch ($aData[0]) {
            case 'CMXPRD':
                $object = new Product();
                break;
            case 'CMXINV':
                $object = new Invoice();
                break;
            case 'CMXPRI':
                $object = new ProductPrice();
                break;
            case 'PRDGRP':
                $object = new ProductGroup();
                break;
            case 'STOCK_AVAILABLE':
                $object = new StockInfo();
                break;
            case 'CMXORD-2':
                $object = new Order();
                break;
            case 'PRICE_GROUP':
                $object = new PriceGroup();
                break;
            case 'CMXVAG':
                $object = new VendorAgreement();
                break;
            case 'ACCDOC':
                $object = new AccountingTransaction();
                break;
            case 'ACCBAL':
                $object = new CheckBalance();
                break;
            case 'INVOICE_PAYMENT':
                $object = new InvoicePayment();
                break;
            case 'CMXSTK':
                $object = new Stock();
                break;
            case 'STOCK_CHANGE':
                $object = new StockChange();
                break;
            case 'CMXBTC':
                $object = new Batch();
                break;
            case 'CMXQTN':
                $object = new Quotation();
                break;
            case 'CMXDLV':
                $object = new Delivery();
                break;
            case 'CMXPOD':
                $object = new PurchaseOrder();
                break;
            case 'CMXKND':
                $object = new Customer();
                break;
                break;
            case 'CMXABO':
                $object = new Abo();
                break;
            case 'NEW_OBJECT_ID';
                break;
            default:
                die('Entity not mapped in CollmexBundle!');

        }

        if (isset($object)) {
            $object->setData($aData);
            $this->objects[] = $object;
        }
    }

    public function getObjects()
    {
        return $this->objects;
    }

    public function addMessage($message)
    {
        $this->messages[] = $message;
    }

    public function getMessages()
    {
        return $this->messages;
    }

    public function addNewObjectId($newObjectId)
    {
        $this->newObjectIds[] = $newObjectId;
    }

    public function getNewObjectIds()
    {
        return $this->newObjectIds;
    }
}
