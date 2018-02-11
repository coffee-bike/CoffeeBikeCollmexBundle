<?php
/**
 * Created by PhpStorm.
 * User: bike
 * Date: 19.01.18
 * Time: 11:46
 */

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Supplier
 * @package CoffeeBike\CollmexBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="cm_supplier")
 */
class Supplier extends CollmexObject
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
    protected $type_identifier = 'CMXLRN';
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $company_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $invoice_date;
    /**
     * @ORM\Column(type="string")
     */
    protected $invoice_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $net_amount_full_VAT_rate;
    /**
     * @ORM\Column(type="string")
     */
    protected $tax_full_VAT_rate;
    /**
     * @ORM\Column(type="string")
     */
    protected $net_amount_half_VAT_rate;
    /**
     * @ORM\Column(type="string")
     */
    protected $tax_half_VAT_rate;
    /**
     * @ORM\Column(type="string")
     */
    protected $other_profits_bank_account_number;
    /**
     * @ORM\Column(type="string")
     */
    protected $other_profits_amount;
    /**
     * @ORM\Column(type="string")
     */
    protected $currency;
    /**
     * @ORM\Column(type="string")
     */
    protected $contra_account;
    /**
     * @ORM\Column(type="string")
     */
    protected $credit_note;
    /**
     * @ORM\Column(type="string")
     */
    protected $booking_text;
    /**
     * @ORM\Column(type="string")
     */
    protected $payment_condition;
    /**
     * @ORM\Column(type="string")
     */
    protected $bank_account_number_full_VAT_rate;
    /**
     * @ORM\Column(type="string")
     */
    protected $bank_account_number_half_VAT_rate;
    /**
     * @ORM\Column(type="string")
     */
    protected $cancellation;
    /**
     * @ORM\Column(type="string")
     */
    protected $cost_center;
}