<?php

namespace CoffeeBike\CollmexBundle\Models;

class Product extends CollmexObject
{

        protected $type_identifier ='CMXPRD';
        protected $product_id;
        protected $product_name;
        protected $product_name_en;
        protected $base_unit_measure;
        protected $product_group;
        protected $company;
        protected $tax_classification;
        protected $weight;
        protected $weight_base_unit;
        protected $price_quotation;
        protected $product_type;
        protected $inactive;
        protected $price_group;
        protected $retail_price;
        protected $ean;
        protected $manufacturer;
        protected $shipping_group;
        protected $minimum_stock ;
        protected $order_volume;
        protected $batch_management_requirement;
        protected $procurement;
        protected $production_time;
        protected $wage_costs;
        protected $wage_costs_reference_amount;
        protected $remark;
        protected $cost_determination;
        protected $cost;
        protected $cost_reference_amount;
        protected $supplier;
        protected $supplier_tax_classification;
        protected $supplier_product_id;
        protected $supplier_package_unit;
        protected $supplier_designation;
        protected $supplier_price;
        protected $supplier_price_amount;
        protected $supplier_delivery_time;
        protected $supplier_currency;
        protected $reserved1;
        protected $reserved2;
        protected $website_no;
        protected $shop_shorttext;
        protected $shop_fulltext;
        protected $text_html;
        protected $filename;
        protected $keywords;
        protected $title;
        protected $different_template;
        protected $picture_url;
        protected $basic_price_amount_1;
        protected $basic_price_amount_2;
        protected $basic_unit;
        protected $requested_price;
        protected $inactive_product;
        protected $shop_category;
        protected $reserved3;
        protected $reserved4;
        protected $reserved5;
        protected $manufacturer_product_id;
        protected $delivery_relevance;
        protected $amazon_asin;
        protected $ebay_article_id;
        protected $direct_delivery;
        protected $goods_number;
        protected $extraInfo;



    public function setField($key, $value)
    {
        $this->template[$key] = $value;

        if ($key == 'remark') {
            $this->parseRemark();
        }
    }

    public function getExtraInfo()
    {
        return $this->extraInfo;
    }

    public function parseRemark()
    {
        $remark = $this->getField('remark');

        preg_match_all("/(\[)(.*?)(\])/", $remark, $aMatches);

        foreach ($aMatches[2] as $match) {
            $parameters = explode('=', $match);
            $this->extraInfo[$parameters[0]] = $parameters[1];
        }
    }
}