<?php
/**
 * Created by PhpStorm.
 * User: bike
 * Date: 16.01.18
 * Time: 10:52
 */

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class InvoicePayment
 * @package CoffeeBike\CollmexBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="cm_invoice_payment")
 */
class InvoicePayment extends CollmexObject
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
    protected $type_identifier = 'INVOICE_PAYMENT';
    /**
     * @ORM\Column(type="string")
     */
    protected $bill_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $date;
    /**
     * @ORM\Column(type="string")
     */
    protected $amount_paid;
    /**
     * @ORM\Column(type="string")
     */
    protected $reducing_amount;
    /**
     * @ORM\Column(type="string")
     */
    protected $financial_year;
    /**
     * @ORM\Column(type="string")
     */
    protected $accounting_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $accounting_position;
    /**
     * @ORM\Column(type="string")
     */
    protected $system_name;
}