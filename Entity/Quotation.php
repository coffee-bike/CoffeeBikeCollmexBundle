<?php
/**
 * Created by PhpStorm.
 * User: bike
 * Date: 17.01.18
 * Time: 09:27
 */

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Quotation
 * @package CoffeeBike\CollmexBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="cm_quotation")
 */
class Quotation extends CollmexObject
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
    protected $type_identifier = 'CMXQTN';
    /**
     * @ORM\Column(type="string")
     */
    protected $offer_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $position;
    /**
     * @ORM\Column(type="string")
     */
    protected $offer_type;
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
    protected $offer_date;
    /**
     * @ORM\Column(type="string")
     */
    protected $price_date;
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
    protected $price_group;
    /**
     * @ORM\Column(type="string")
     */
    protected $discount_group;
    /**
     * @ORM\Column(type="string")
     */
    protected $final_discount;
    /**
     * @ORM\Column(type="string")
     */
    protected $discount_reason;
    /**
     * @ORM\Column(type="string")
     */
    protected $offer_text;
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
    protected $declined_on;
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
    protected $intermediary;
    /**
     * @ORM\Column(type="string")
     */
    protected $final_discount2;
    /**
     * @ORM\Column(type="string")
     */
    protected $final_discount2_reason;
    /**
     * @ORM\Column(type="string")
     */
    protected $status;
    /**
     * @ORM\Column(type="string")
     */
    protected $deadline;
    /**
     * @ORM\Column(type="string")
     */
    protected $shipping_method;
    /**
     * @ORM\Column(type="string")
     */
    protected $shipping_fees;
    /**
     * @ORM\Column(type="string")
     */
    protected $fee_for_cash_on_collection;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_date;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_conditions;
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
    protected $unit_price;
    /**
     * @ORM\Column(type="string")
     */
    protected $price_quantity;
    /**
     * @ORM\Column(type="string")
     */
    protected $position_discount;
    /**
     * @ORM\Column(type="string")
     */
    protected $position_worth;
    /**
     * @ORM\Column(type="string")
     */
    protected $product_type;
    /**
     * @ORM\Column(type="string")
     */
    protected $tax_classification;
    /**
     * @ORM\Column(type="string")
     */
    protected $taxes_overseas;
    /**
     * @ORM\Column(type="string")
     */
    protected $revenue_type;
    /**
     * @ORM\Column(type="string")
     */
    protected $position_sum;
    /**
     * @ORM\Column(type="string")
     */
    protected $revenue;
    /**
     * @ORM\Column(type="string")
     */
    protected $expenses;
    /**
     * @ORM\Column(type="string")
     */
    protected $gross_profit;
    /**
     * @ORM\Column(type="string")
     */
    protected $margin;
    /**
     * @ORM\Column(type="string")
     */
    protected $expenses_manually;
}