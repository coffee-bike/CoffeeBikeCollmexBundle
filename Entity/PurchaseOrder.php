<?php
/**
 * Created by PhpStorm.
 * User: bike
 * Date: 17.01.18
 * Time: 14:22
 */

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class PurchaseOrder
 * @package CoffeeBike\CollmexBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="cm_purchase_order")
 */
class PurchaseOrder extends CollmexObject
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
    protected $type_identifier = 'CMXPOD';
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_order_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $position;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_order_type;
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
    protected $supplier_private_citizen;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_order_date;
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
    protected $supplier_order_text;
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
    protected $finished;
    /**
     * @ORM\Column(type="string")
     */
    protected $language;
    /**
     * @ORM\Column(type="string")
     */
    protected $employee_working_on;
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
    protected $delivery_address_salutation;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_address_title;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_address_forename;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_address_last_name;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_address_company;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_address_department;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_address_street;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_address_postal_code;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_address_city;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_address_country;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_address_phone;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_address_phone2;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_address_fax;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_address_email;
    /**
     * @ORM\Column(type="string")
     */
    protected $status;
    /**
     * @ORM\Column(type="string")
     */
    protected $order_id;
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
    protected $delivery_date;
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
    protected $delivery_time;
    /**
     * @ORM\Column(type="string")
     */
    protected $position_value;
    /**
     * @ORM\Column(type="string")
     */
    protected $order_position;
}