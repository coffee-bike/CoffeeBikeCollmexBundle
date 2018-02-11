<?php
/**
 * Created by PhpStorm.
 * User: bike
 * Date: 19.01.18
 * Time: 11:08
 */

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Profits
 * @package CoffeeBike\CollmexBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="cm_profits")
 */
class Profits extends CollmexObject
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
    protected $type_identifier = 'CMXUMS';
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
    protected $revenue_intra_community_delivery;
    /**
     * @ORM\Column(type="string")
     */
    protected $revenue_export;
    /**
     * @ORM\Column(type="string")
     */
    protected $tax_free_profits_bank_account_number;
    /**
     * @ORM\Column(type="string")
     */
    protected $tax_free_profits_amount;
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
    protected $invoice_type;
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
    protected $final_invoice;
    /**
     * @ORM\Column(type="string")
     */
    protected $profit_type;
    /**
     * @ORM\Column(type="string")
     */
    protected $system_name;
    /**
     * @ORM\Column(type="string")
     */
    protected $offset_with_invoice_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $cost_center;
    /**
     * @ORM\Column(type="string")
     */
    protected $direct_debit_execution_on;
}