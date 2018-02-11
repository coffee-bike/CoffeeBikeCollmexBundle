<?php
/**
 * Created by PhpStorm.
 * User: bike
 * Date: 18.01.18
 * Time: 16:11
 */

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class OpenItem
 * @package CoffeeBike\CollmexBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="cm_open_item")
 */
class OpenItem extends CollmexObject
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
    protected $type_identifier = 'OPEN_ITEM';
    /**
     * @ORM\Column(type="string")
     */
    protected $company_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $financial_year;
    /**
     * @ORM\Column(type="string")
     */
    protected $booking_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $position_id;
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
    protected $supplier_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_name;
    /**
     * @ORM\Column(type="string")
     */
    protected $invoice_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $document_date;
    /**
     * @ORM\Column(type="string")
     */
    protected $term_of_payment;
    /**
     * @ORM\Column(type="string")
     */
    protected $maturity;
    /**
     * @ORM\Column(type="string")
     */
    protected $delay;
    /**
     * @ORM\Column(type="string")
     */
    protected $reminder_stage;
    /**
     * @ORM\Column(type="string")
     */
    protected $reminder_date;
    /**
     * @ORM\Column(type="string")
     */
    protected $reminder_fee;
    /**
     * @ORM\Column(type="string")
     */
    protected $amount;
    /**
     * @ORM\Column(type="string")
     */
    protected $paid;
    /**
     * @ORM\Column(type="string")
     */
    protected $open;
}