<?php
/**
 * Created by PhpStorm.
 * User: bike
 * Date: 16.01.18
 * Time: 14:42
 */

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class Stock
 * @ORM\Entity
 * @ORM\Table(name="cm_stock")
 */
class Stock
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
    protected $type_identifier = 'CMXSTK';
    /**
     * @ORM\Column(type="string")
     */
    protected $product_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $company;
    /**
     * @ORM\Column(type="string")
     */
    protected $quantity;
    /**
     * @ORM\Column(type="string")
     */
    protected $stock_type;
    /**
     * @ORM\Column(type="string")
     */
    protected $batch_number;
    /**
     * @ORM\Column(type="string")
     */
    protected $worth;
    /**
     * @ORM\Column(type="string")
     */
    protected $batch_description;
    /**
     * @ORM\Column(type="string")
     */
    protected $product_description;
}