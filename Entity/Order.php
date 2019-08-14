<?php
/**
 * Created by IntelliJ IDEA.
 * User: cb
 * Date: 12.09.17
 * Time: 12:14
 */

namespace CoffeeBike\CollmexBundle\Entity;


class Order extends CollmexObject
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
    protected $type_identifier = 'CMXORD-2';
    /**
     * @ORM\Column(type="integer")
     */
    protected $order_id;
    /**
     * @ORM\Column(type="integer")
     */
    protected $position;
    /**
     * @ORM\Column(type="integer")
     */
    protected $order_type;
    /**
     * @ORM\Column(type="string")
     */
    protected $client_id;
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
     * @ORM\Column(type="string")
     */
    protected $customer_vat_id;
    /**
     * @ORM\Column(type="integer")
     */
    protected $customer_private;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_order_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $order_date;
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
     * @ORM\Column(type="text")
     */
    protected $order_text;
    /**
     * @ORM\Column(type="text")
     */
    protected $final_text;
    /**
     * @ORM\Column(type="text")
     */
    protected $annotation;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $split_invoice;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $split_shipment;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $deleted;
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
    protected $discount_final_2;
    /**
     * @ORM\Column(type="string")
     */
    protected $discount_final_2_reason;
    /**
     * @ORM\Column(type="string")
     */
    protected $voucher;
    /**
     * @ORM\Column(type="string")
     */
    protected $cancelled_at;
    /**
     * @ORM\Column(type="string")
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
     * @ORM\Column(type="integer")
     */
    protected $position_type;
    /**
     * @ORM\Column(type="string")
     */
    protected $product_id;
    /**
     * @ORM\Column(type="text")
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
    protected $time_of_delivery;
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
     * @ORM\Column(type="boolean")
     */
    protected $foreign_tax;
    /**
     * @ORM\Column(type="integer")
     */
    protected $revenue_type;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $finished_shipping;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $finished_invoice;
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
    
    public function parseRemark()
    {
        $remark = $this->getField('annotation');
        preg_match_all("/(\[)(.*?)(\])/", $remark, $aMatches);
        $array = array();

        foreach ($aMatches[2] as $match) {
            $parameters = explode('=', $match);
            $array[$parameters[0]] = $parameters[1];
        }

        return $array;
    }
}
