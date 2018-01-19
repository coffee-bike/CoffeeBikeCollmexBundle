<?php
/**
 * Created by PhpStorm.
 * User: bike
 * Date: 18.01.18
 * Time: 09:26
 */

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Vendor
 * @package CoffeeBike\CollmexBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="cm_vendor")
 */
class Vendor extends CollmexObject
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
    protected $type_identifier = 'CMXLIF';
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
    protected $salutation;
    /**
     * @ORM\Column(type="string")
     */
    protected $title;
    /**
     * @ORM\Column(type="string")
     */
    protected $forename;
    /**
     * @ORM\Column(type="string")
     */
    protected $last_name;
    /**
     * @ORM\Column(type="string")
     */
    protected $company;
    /**
     * @ORM\Column(type="string")
     */
    protected $department;
    /**
     * @ORM\Column(type="string")
     */
    protected $street;
    /**
     * @ORM\Column(type="string")
     */
    protected $postal_code;
    /**
     * @ORM\Column(type="string")
     */
    protected $city;
    /**
     * @ORM\Column(type="string")
     */
    protected $notice;
    /**
     * @ORM\Column(type="string")
     */
    protected $inactive;
    /**
     * @ORM\Column(type="string")
     */
    protected $country;
    /**
     * @ORM\Column(type="string")
     */
    protected $phone;
    /**
     * @ORM\Column(type="string")
     */
    protected $fax;
    /**
     * @ORM\Column(type="string")
     */
    protected $email;
    /**
     * @ORM\Column(type="string")
     */
    protected $bank_account_number;
    /**
     * @ORM\Column(type="string")
     */
    protected $bank_code;
    /**
     * @ORM\Column(type="string")
     */
    protected $IBAN;
    /**
     * @ORM\Column(type="string")
     */
    protected $BIC;
    /**
     * @ORM\Column(type="string")
     */
    protected $bank_name;
    /**
     * @ORM\Column(type="string")
     */
    protected $tax_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $UStIdNr;
    /**
     * @ORM\Column(type="string")
     */
    protected $payment_condition;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_condition;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_condition_addition;
    /**
     * @ORM\Column(type="string")
     */
    protected $output_medium;
    /**
     * @ORM\Column(type="string")
     */
    protected $bank_account_holder;
    /**
     * @ORM\Column(type="string")
     */
    protected $address_group;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_id_from_supplier;
    /**
     * @ORM\Column(type="string")
     */
    protected $currency;
    /**
     * @ORM\Column(type="string")
     */
    protected $phone2;
    /**
     * @ORM\Column(type="string")
     */
    protected $output_language;
}