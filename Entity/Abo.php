<?php
/**
 * Created by PhpStorm.
 * User: bike
 * Date: 17.01.18
 * Time: 16:06
 */

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Abo
 * @package CoffeeBike\CollmexBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="cm_abo")
 */
class Abo extends CollmexObject
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
    protected $type_identifier = 'CMXABO';
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $company_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $valid_from;
    /**
     * @ORM\Column(type="string")
     */
    protected $valid_until;
    /**
     * @ORM\Column(type="string")
     */
    protected $product_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $product_description;
    /**
     * @ORM\Column(type="string")
     */
    protected $individual_price;
    /**
     * @ORM\Column(type="string")
     */
    protected $range;
    /**
     * @ORM\Column(type="string")
     */
    protected $next_bill;
    /**
     * @ORM\Column(type="string")
     */
    protected $amount;
    /**
     * @ORM\Column(type="string")
     */
    protected $position;
}