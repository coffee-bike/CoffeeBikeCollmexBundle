<?php
/**
 * Created by PhpStorm.
 * User: Thomas Kremer
 * Date: 15.01.18
 * Time: 13:54
 */

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="cm_accounting_transaction")
 */
class AccountingTransaction extends CollmexObject
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
    protected $type_identifier = 'ACCDOC';
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
    protected $transaction_id;
    /**
     * @ORM\Column(type="date")
     */
    protected $slip_date;
    /**
     * @ORM\Column(type="string")
     */
    protected $date;
    /**
     * @ORM\Column(type="string")
     */
    protected $transaction_text;
    /**
     * @ORM\Column(type="string")
     */
    protected $position_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $bank_account_number;
    /**
     * @ORM\Column(type="string")
     */
    protected $bank_account_name;
    /**
     * @ORM\Column(type="string")
     */
    protected $debit_credit;
    /**
     * @ORM\Column(type="float")
     */
    protected $amount;
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
    protected $annex_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $annex_name;
    /**
     * @ORM\Column(type="string")
     */
    protected $canceled_transaction;
    /**
     * @ORM\Column(type="string")
     */
    protected $cost_location;
    /**
     * @ORM\Column(type="string")
     */
    protected $bill_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_order_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $travel_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $assigned_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $assigned_financial_year;
    /**
     * @ORM\Column(type="string")
     */
    protected $assigned_position_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $document_id;
}