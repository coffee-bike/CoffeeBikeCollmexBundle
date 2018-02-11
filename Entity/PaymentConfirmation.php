<?php
/**
 * Created by PhpStorm.
 * User: bike
 * Date: 19.01.18
 * Time: 15:24
 */

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class PaymentConfirmation
 * @package CoffeeBike\CollmexBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="cm_payment_confirmation")
 */
class PaymentConfirmation extends CollmexObject
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
    protected $type_identifier = 'PAYMENT_CONFIRMATION';
    /**
     * @ORM\Column(type="string")
     */
    protected $company_order_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $date_of_payment;
    /**
     * @ORM\Column(type="string")
     */
    protected $payment_amount;/**
 * @ORM\Column(type="string")
 */
    protected $fee;
    /**
     * @ORM\Column(type="string")
     */
    protected $currency;
    /**
     * @ORM\Column(type="string")
     */
    protected $paypal_mail_address;
    /**
     * @ORM\Column(type="string")
     */
    protected $paypal_transaction_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $cost_center;
}