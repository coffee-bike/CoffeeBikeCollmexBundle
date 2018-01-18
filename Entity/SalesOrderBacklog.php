<?php
/**
 * Created by PhpStorm.
 * User: bike
 * Date: 18.01.18
 * Time: 16:42
 */

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class SalesOrderBacklog
 * @package CoffeeBike\CollmexBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="cm_sales_order_backlog")
 */
class SalesOrderBacklog extends CollmexObject
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
    protected $type_identifier = 'SALES_ORDER_BACKLOG';
    /**
     * @ORM\Column(type="string")
     */
    protected $position_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $company_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_name;
    /**
     * @ORM\Column(type="string")
     */
    protected $product_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $description;
    /**
     * @ORM\Column(type="string")
     */
    protected $order_date;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_date;
    /**
     * @ORM\Column(type="string")
     */
    protected $order_quantity;
    /**
     * @ORM\Column(type="string")
     */
    protected $open_quantity;
    /**
     * @ORM\Column(type="string")
     */
    protected $quantity_unit;
    /**
     * @ORM\Column(type="string")
     */
    protected $gross_profit;
    /**
     * @ORM\Column(type="string")
     */
    protected $revenue;
}