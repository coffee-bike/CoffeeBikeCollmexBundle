<?php
/**
 * Created by PhpStorm.
 * User: bike
 * Date: 17.01.18
 * Time: 11:58
 */

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Delivery
 * @package CoffeeBike\CollmexBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="cm_delivery")
 */
class Delivery extends CollmexObject
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
    protected $type_identifier = 'CMXDLV';
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $position;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_type;
    /**
     * @ORM\Column(type="string")
     */
    protected $company_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $order_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_salutation;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_title;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_forename;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_last_name;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_company;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_department;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_street;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_postal_code;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_city;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_country;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_phone;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_phone2;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_fax;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_email;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_bank_account_number;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_bank_code;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_alternative_bank_account_holder;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_IBAN;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_BIC;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_bank;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_UStIdNr;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_private_citizen;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_order_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_date;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_text;
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
    protected $status;
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
    protected $weight;
    /**
     * @ORM\Column(type="string")
     */
    protected $fee_for_cash_on_collection_amount;
    /**
     * @ORM\Column(type="string")
     */
    protected $fee_for_cash_on_collection_currency;
    /**
     * @ORM\Column(type="string")
     */
    protected $shipment_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $shipping_type;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_condition;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_conditions_addition;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_salutation;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_title;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_forename;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_last_name;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_company;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_department;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_street;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_postal_code;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_city;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_country;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_phone;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_phone2;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_fax;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_email;
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
    protected $customer_order_position;
    /**
     * @ORM\Column(type="string")
     */
    protected $EAN;
}