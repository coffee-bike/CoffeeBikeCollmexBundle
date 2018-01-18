<?php
/**
 * Created by PhpStorm.
 * User: bike
 * Date: 18.01.18
 * Time: 15:54
 */

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Voucher
 * @package CoffeeBike\CollmexBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="cm_voucher")
 */
class Voucher extends CollmexObject
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
    protected $type_identifier = 'VOUCHER';
    /**
     * @ORM\Column(type="string")
     */
    protected $voucher_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $company_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $permitted_usage;
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
    protected $discount_in_percent;
    /**
     * @ORM\Column(type="string")
     */
    protected $discount_as_sum;
    /**
     * @ORM\Column(type="string")
     */
    protected $discount_reason;
    /**
     * @ORM\Column(type="string")
     */
    protected $intermediary;
    /**
     * @ORM\Column(type="string")
     */
    protected $minimum_order_value;
    /**
     * @ORM\Column(type="string")
     */
    protected $currency;
}