<?php
/**
 * Created by PhpStorm.
 * User: bike
 * Date: 18.01.18
 * Time: 10:13
 */

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Address
 * @package CoffeeBike\CollmexBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="cm_address")
 */
class Address extends CollmexObject
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
    protected $type_identifier = 'CMXADR';
    /**
     * @ORM\Column(type="string")
     */
    protected $address_id;
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
    protected $phone2;
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
    protected $no_mailings;
    /**
     * @ORM\Column(type="string")
     */
    protected $skype_VoIP;
    /**
     * @ORM\Column(type="string")
     */
    protected $URL;
    /**
     * @ORM\Column(type="string")
     */
    protected $bank_account_holder;
    /**
     * @ORM\Column(type="string")
     */
    protected $resubmission;
    /**
     * @ORM\Column(type="string")
     */
    protected $address_group;
    /**
     * @ORM\Column(type="string")
     */
    protected $intermediary;
    /**
     * @ORM\Column(type="string")
     */
    protected $intermediary_company_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $direct_debit_mandate_reference;
    /**
     * @ORM\Column(type="string")
     */
    protected $date_signature;

}