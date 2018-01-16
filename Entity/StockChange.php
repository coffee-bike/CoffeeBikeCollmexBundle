<?php
/**
 * Created by PhpStorm.
 * User: bike
 * Date: 16.01.18
 * Time: 15:15
 */

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class StockChange
 * @package CoffeeBike\CollmexBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="cm_stock_change")
 */
class StockChange
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     */
    protected $type_identifier = 'STOCK_CHANGE';
    /**
     * @ORM\Column(type="string")
     */
    protected $stock_change_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $stock_change_position;
    /**
     * @ORM\Column(type="string")
     */
    protected $product_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $movement_type;
    /**
     * @ORM\Column(type="string")
     */
    protected $quantity;
    /**
     * @ORM\Column(type="string")
     */
    protected $target_location_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $target_stock_type;
    /**
     * @ORM\Column(type="string")
     */
    protected $target_batch_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $target_batch_description;
    /**
     * @ORM\Column(type="string")
     */
    protected $origin_location_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $origin_stock_type;
    /**
     * @ORM\Column(type="string")
     */
    protected $origin_batch_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_assignment_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_assignment_position;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_position;
    /**
     * @ORM\Column(type="string")
     */
    protected $production_order_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $production_order_komp;
    /**
     * @ORM\Column(type="string")
     */
    protected $bill_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $bill_position;
    /**
     * @ORM\Column(type="string")
     */
    protected $cancellation_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $cancellation_position;
    /**
     * @ORM\Column(type="string")
     */
    protected $memo;
    /**
     * @ORM\Column(type="string")
     */
    protected $booking_date;
    /**
     * @ORM\Column(type="string")
     */
    protected $booking_time;
}