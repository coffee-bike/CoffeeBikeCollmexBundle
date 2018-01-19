<?php
/**
 * Created by PhpStorm.
 * User: bike
 * Date: 19.01.18
 * Time: 14:21
 */

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Payroll
 * @package CoffeeBike\CollmexBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="cm_payroll")
 */
class Payroll extends CollmexObject
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
    protected $type_identifier = 'CMXPRL';
    /**
     * @ORM\Column(type="string")
     */
    protected $company_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $year;
    /**
     * @ORM\Column(type="string")
     */
    protected $month;
    /**
     * @ORM\Column(type="string")
     */
    protected $document_date;
    /**
     * @ORM\Column(type="string")
     */
    protected $booking_text;
    /**
     * @ORM\Column(type="string")
     */
    protected $amount;
    /**
     * @ORM\Column(type="string")
     */
    protected $debit_account;
    /**
     * @ORM\Column(type="string")
     */
    protected $credit_account;
    /**
     * @ORM\Column(type="string")
     */
    protected $cost_centre;
}