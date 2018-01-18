<?php
/**
 * Created by PhpStorm.
 * User: bike
 * Date: 18.01.18
 * Time: 13:57
 */

namespace CoffeeBike\CollmexBundle\Entity;

namespace CoffeeBike\CollmexBundle\Entity;

/**
 * Class ProductionOrder
 * @package CoffeeBike\CollmexBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="cm_production_order")
 */
class ProductionOrder extends CollmexObject
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
    protected $type_identifier = 'PROJECT_STAFF';
    /**
     * @ORM\Column(type="string")
     */
    protected $production_order_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $component_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $company_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $product_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $quantity;
    /**
     * @ORM\Column(type="string")
     */
    protected $starting_date;
    /**
     * @ORM\Column(type="string")
     */
    protected $ending_date;
    /**
     * @ORM\Column(type="string")
     */
    protected $duration;
    /**
     * @ORM\Column(type="string")
     */
    protected $released;
    /**
     * @ORM\Column(type="string")
     */
    protected $completed;
    /**
     * @ORM\Column(type="string")
     */
    protected $text;
    /**
     * @ORM\Column(type="string")
     */
    protected $version_of_component_list;
    /**
     * @ORM\Column(type="string")
     */
    protected $component_product_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $required_quantity;
    /**
     * @ORM\Column(type="string")
     */
    protected $position_id_of_component_list;
}