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
            case 'PRDGRP':
                $object = new ProductGroup();
                break;
            case 'STOCK_AVAILABLE':
                $object = new StockInfo();
                break;
            case 'CMXORD-2':
                $object = new Order();
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