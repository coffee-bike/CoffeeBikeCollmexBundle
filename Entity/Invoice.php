<?php

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cm_invoice")
 */
class Invoice extends CollmexObject
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
    protected $type_identifier = 'CMXINV';
    /**
     * @ORM\Column(type="integer")
     */
    protected $invoice_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $position;
    /**
     * @ORM\Column(type="string")
     */
    protected $invoice_type;
    /**
     * @ORM\Column(type="integer")
     */
    protected $client_id;
    /**
     * @ORM\Column(type="integer")
     */
    protected $order_id;
    /**
     * @ORM\Column(type="integer")
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
    protected $customer_lastname;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_firm;
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
    protected $customer_zipcode;
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
    protected $customer_phone_2;
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
    protected $customer_bank_account;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_bank_code;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_bank_account_owner;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_bank_iban;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_bank_bic;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_bank_name;
    /**
     * @ORM\Column(type="integer")
     */
    protected $customer_vat_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $reserved;
    /**
     * @ORM\Column(type="string")
     */
    protected $invoice_date;
    /**
     * @ORM\Column(type="string")
     */
    protected $price_date;
    /**
     * @ORM\Column(type="string")
     */
    protected $terms_of_payment;
    /**
     * @ORM\Column(type="string")
     */
    protected $currency;
    /**
     * @ORM\Column(type="string")
     */
    protected $price_group;
    /**
     * @ORM\Column(type="integer")
     */
    protected $discount_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $discount_final;
    /**
     * @ORM\Column(type="string")
     */
    protected $discount_reason;
    /**
     * @ORM\Column(type="string")
     */
    protected $invoice_text;
    /**
     * @ORM\Column(type="string")
     */
    protected $final_text;
    /**
     * @ORM\Column(type="string")
     */
    protected $annotation;
    /**
     * @ORM\Column(type="string")
     */
    protected $deleted;
    /**
     * @ORM\Column(type="string")
     */
    protected $language;
    /**
     * @ORM\Column(type="integer")
     */
    protected $employee_id;
    /**
     * @ORM\Column(type="integer")
     */
    protected $agent_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $system_name;
    /**
     * @ORM\Column(type="string")
     */
    protected $status;
    /**
     * @ORM\Column(type="string")
     */
    protected $discount_final_2;
    /**
     * @ORM\Column(type="string")
     */
    protected $discount_final_2_reason;
    /**
     * @ORM\Column(type="integer")
     */
    protected $shipping_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $shipping_costs;
    /**
     * @ORM\Column(type="string")
     */
    protected $cod_costs;
    /**
     * @ORM\Column(type="string")
     */
    protected $time_of_delivery;
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
    protected $delivery_lastname;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_firm;
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
    protected $delivery_zipcode;
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
    protected $delivery_phone_2;
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
    protected $price;
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
    protected $position_value;
    /**
     * @ORM\Column(type="string")
     */
    protected $product_type;
    /**
     * @ORM\Column(type="string")
     */
    protected $tax_rate;
    /**
     * @ORM\Column(type="string")
     */
    protected $foreign_tax;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_order_position;
    /**
     * @ORM\Column(type="string")
     */
    protected $revenue_type;
    /**
     * @ORM\Column(type="string")
     */
    protected $sum_over_positions;
    /**
     * @ORM\Column(type="string")
     */
    protected $revenue;
    /**
     * @ORM\Column(type="string")
     */
    protected $costs;
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
    protected $costs_manual;

}