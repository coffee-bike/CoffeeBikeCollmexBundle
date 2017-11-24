<?php

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cm_customer")
 */
class Customer extends CollmexObject
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
    protected $type_identifier = 'CMXKND';
    /**
     * @ORM\Column(type="integer")
     */
    protected $customer_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $client_id;
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
    protected $firstname;
    /**
     * @ORM\Column(type="string")
     */
    protected $lastname;
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
    protected $zipcode;
    /**
     * @ORM\Column(type="string")
     */
    protected $city;
    /**
     * @ORM\Column(type="text", length=1024)
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
    protected $bank_account;
    /**
     * @ORM\Column(type="string")
     */
    protected $bank_code;
    /**
     * @ORM\Column(type="string")
     */
    protected $bank_iban;
    /**
     * @ORM\Column(type="string")
     */
    protected $bank_bic;
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
    protected $vat_id;
    /**
     * @ORM\Column(type="integer")
     */
    protected $terms_of_payment;
    /**
     * @ORM\Column(type="string")
     */
    protected $discount_group;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_conditions;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_conditions_additional;
    /**
     * @ORM\Column(type="string")
     */
    protected $output_medium;
    /**
     * @ORM\Column(type="string")
     */
    protected $bank_account_owner;
    /**
     * @ORM\Column(type="string")
     */
    protected $address_group;
    /**
     * @ORM\Column(type="string")
     */
    protected $ebay_account;
    /**
     * @ORM\Column(type="string")
     */
    protected $price_group;
    /**
     * @ORM\Column(type="string")
     */
    protected $currency;
    /**
     * @ORM\Column(type="string")
     */
    protected $employee_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $cost_center;
    /**
     * @ORM\Column(type="string")
     */
    protected $follow_up_date;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_block;
    /**
     * @ORM\Column(type="string")
     */
    protected $construction_cleaning_service;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_delivery_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $language;
    /**
     * @ORM\Column(type="string")
     */
    protected $email_cc;
    /**
     * @ORM\Column(type="string")
     */
    protected $phone_2;
    /**
     * @ORM\Column(type="string")
     */
    protected $direct_debit_mandate_reference;
    /**
     * @ORM\Column(type="string")
     */
    protected $ddmr_signature_date;
    /**
     * @ORM\Column(type="string")
     */
    protected $dunning_block;
    /**
     * @ORM\Column(type="string")
     */
    protected $no_mailings;
    /**
     * @ORM\Column(type="string")
     */
    protected $private;
    /**
     * @ORM\Column(type="string")
     */
    protected $url;
    /**
     * @ORM\Column(type="string")
     */
    protected $part_delivery;
    /**
     * @ORM\Column(type="string")
     */
    protected $part_invoice;
}