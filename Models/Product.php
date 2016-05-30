<?php

namespace CoffeeBike\CollmexBundle\Models;

class Product extends CollmexObject
{
    protected $template = array(
        'type_identifier' => 'CMXPRD',
        'product_id' => null,
        'product_name' => null,
        'product_name_en' => null,
        'base_unit_measure' => null,
        'product_group' => null,
        'company' => null,
        'tax_classification' => null,
        'weight' => null,
        'weight_base_unit' => null,
        'price_quotation' => null,
        'product_type' => null,
        'inactive' => null,
        'price_group' => null,
        'retail_price' => null,
        'ean' => null,
        'manufacturer' => null,
        'shipping_group' => null,
        'minimum_stock ' => null,
        'order_volume' => null,
        'batch_management_requirement' => null,
        'procurement' => null,
        'production_time' => null,
        'wage_costs' => null,
        'wage_costs_reference_amount' => null,
        'remark' => null,
        'cost_determination' => null,
        'cost' => null,
        'cost_reference_amount' => null,
        'supplier' => null,
        'supplier_tax_classification' => null,
        'supplier_product_id' => null,
        'supplier_package_unit' => null,
        'supplier_designation' => null,
        'supplier_price' => null,
        'supplier_price_amount' => null,
        'supplier_delivery_time' => null,
        'supplier_currency' => null,
        'reserved1' => null,
        'reserved2' => null,
        'website_no' => null,
        'shop_shorttext' => null,
        'shop_fulltext' => null,
        'text_html' => null,
        'filename' => null,
        'keywords' => null,
        'title' => null,
        'different_template' => null,
        'picture_url' => null,
        'basic_price_amount_1' => null,
        'basic_price_amount_2' => null,
        'basic_unit' => null,
        'requested_price' => null,
        'inactive_product' => null,
        'shop_category' => null,
        'reserved3' => null,
        'reserved4' => null,
        'reserved5' => null,
        'manufacturer_product_id' => null,
        'delivery_relevance' => null,
        'amazon_asin' => null,
        'ebay_article_id' => null,
        'direct_delivery' => null,
        'goods_number' => null,
    );

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
        $key = null;
        $value = null;

        preg_match_all("/(\[)(.*?)(\])/", $remark, $aMatches);

        foreach ($aMatches[2] as $match) {
            $parameters = explode('=', $match);
            $key = $parameters[0];
            $value = $parameters[1];
        }

        $this->extraInfo[$key] = $value;
    }
}