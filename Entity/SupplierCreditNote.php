<?php
/**
 * Created by PhpStorm.
 * User: bike
 * Date: 19.01.18
 * Time: 12:20
 */

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class SupplierCreditNote
 * @package CoffeeBike\CollmexBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="cm_supplier_credit_note")
 */
class SupplierCreditNote extends CollmexObject
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
    protected $type_identifier = 'CMXSBI';
    /**
     * @ORM\Column(type="string")
     */
    protected $credit_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $position;/**
 * @ORM\Column(type="string")
 */
    protected $credit_type;
    /**
     * @ORM\Column(type="string")
     */
    protected $company_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_salutation;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_title;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_forename;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_last_name;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_company;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_department;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_street;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_postal_code;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_city;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_country;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_phone;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_phone2;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_fax;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_email;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_bank_account_number;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_bank_code;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_alternative_bank_account_holder;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_IBAN;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_BIC;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_bank;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_UStIdNr;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_tax_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_private_person;
    /**
     * @ORM\Column(type="string")
     */
    protected $credit_date;
    /**
     * @ORM\Column(type="string")
     */
    protected $payment_condition;
    /**
     * @ORM\Column(type="string")
     */
    protected $currency;
    /**
     * @ORM\Column(type="string")
     */
    protected $credit_text;
    /**
     * @ORM\Column(type="string")
     */
    protected $final_text;
    /**
     * @ORM\Column(type="string")
     */
    protected $internal_memo;
    /**
     * @ORM\Column(type="string")
     */
    protected $deleted;
    /**
     * @ORM\Column(type="string")
     */
    protected $language;
    /**
     * @ORM\Column(type="string")
     */
    protected $agent;
    /**
     * @ORM\Column(type="string")
     */
    protected $status;
    /**
     * @ORM\Column(type="string")
     */
    protected $position_type;
    /**
     * @ORM\Column(type="string")
     */
    protected $product_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_product_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $product_description;
    /**
     * @ORM\Column(type="string")
     */
    protected $quantity_unit;
    /**
     * @ORM\Column(type="string")
     */
    protected $quantity;
    /**
     * @ORM\Column(type="string")
     */
    protected $price_per_unit;
    /**
     * @ORM\Column(type="string")
     */
    protected $price_quantity;
    /**
     * @ORM\Column(type="string")
     */
    protected $packaging_unit;
    /**
     * @ORM\Column(type="string")
     */
    protected $position_value;
}