<?php

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cm_product")
 */
class Product extends CollmexObject
{
    /**
     * @ORM\Column(type="string")
     */
    protected $type_identifier ='CMXPRD';
    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    protected $product_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $product_name;
    /**
     * @ORM\Column(type="string")
     */
    protected $product_name_en;
    /**
     * @ORM\Column(type="string")
     */
    protected $base_unit_measure;
    /**
     * @ORM\Column(type="string")
     */
    protected $product_group;
    /**
     * @ORM\Column(type="string")
     */
    protected $company;
    /**
     * @ORM\Column(type="string")
     */
    protected $tax_classification;
    /**
     * @ORM\Column(type="string")
     */
    protected $weight;
    /**
     * @ORM\Column(type="string")
     */
    protected $weight_base_unit;
    /**
     * @ORM\Column(type="string")
     */
    protected $price_quotation;
    /**
     * @ORM\Column(type="string")
     */
    protected $product_type;
    /**
     * @ORM\Column(type="string")
     */
    protected $inactive;
    /**
     * @ORM\Column(type="string")
     */
    protected $price_group;
    /**
     * @ORM\Column(type="string")
     */
    protected $retail_price;
    /**
     * @ORM\Column(type="string")
     */
    protected $ean;
    /**
     * @ORM\Column(type="string")
     */
    protected $manufacturer;
    /**
     * @ORM\Column(type="string")
     */
    protected $shipping_group;
    /**
     * @ORM\Column(type="string")
     */
    protected $minimum_stock ;
    /**
     * @ORM\Column(type="string")
     */
    protected $order_volume;
    /**
     * @ORM\Column(type="string")
     */
    protected $batch_management_requirement;
    /**
     * @ORM\Column(type="string")
     */
    protected $procurement;
    /**
     * @ORM\Column(type="string")
     */
    protected $production_time;
    /**
     * @ORM\Column(type="string")
     */
    protected $wage_costs;
    /**
     * @ORM\Column(type="string")
     */
    protected $wage_costs_reference_amount;
    /**
     * @ORM\Column(type="string")
     */
    protected $remark;
    /**
     * @ORM\Column(type="string")
     */
    protected $cost_determination;
    /**
     * @ORM\Column(type="string")
     */
    protected $cost;
    /**
     * @ORM\Column(type="string")
     */
    protected $cost_reference_amount;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_tax_classification;
    /**
     * @ORM\Column(type="integer")
     */
    protected $supplier_product_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_package_unit;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_designation;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_price;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_price_amount;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_delivery_time;
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_currency;
    /**
     * @ORM\Column(type="string")
     */
    protected $reserved1;
    /**
     * @ORM\Column(type="string")
     */
    protected $reserved2;
    /**
     * @ORM\Column(type="string")
     */
    protected $website_no;
    /**
     * @ORM\Column(type="string")
     */
    protected $shop_shorttext;
    /**
     * @ORM\Column(type="string")
     */
    protected $shop_fulltext;
    /**
     * @ORM\Column(type="string")
     */
    protected $text_html;
    /**
     * @ORM\Column(type="string")
     */
    protected $filename;
    /**
     * @ORM\Column(type="string")
     */
    protected $keywords;
    /**
     * @ORM\Column(type="string")
     */
    protected $title;
    /**
     * @ORM\Column(type="string")
     */
    protected $different_template;
    /**
     * @ORM\Column(type="string")
     */
    protected $picture_url;
    /**
     * @ORM\Column(type="string")
     */
    protected $basic_price_amount_1;
    /**
     * @ORM\Column(type="string")
     */
    protected $basic_price_amount_2;
    /**
     * @ORM\Column(type="string")
     */
    protected $basic_unit;
    /**
     * @ORM\Column(type="string")
     */
    protected $requested_price;
    /**
     * @ORM\Column(type="string")
     */
    protected $inactive_product;
    /**
     * @ORM\Column(type="string")
     */
    protected $shop_category;
    /**
     * @ORM\Column(type="string")
     */
    protected $reserved3;
    /**
     * @ORM\Column(type="string")
     */
    protected $reserved4;
    /**
     * @ORM\Column(type="string")
     */
    protected $reserved5;
    /**
     * @ORM\Column(type="integer")
     */
    protected $manufacturer_product_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_relevance;
    /**
     * @ORM\Column(type="string")
     */
    protected $amazon_asin;
    /**
     * @ORM\Column(type="integer")
     */
    protected $ebay_article_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $direct_delivery;
    /**
     * @ORM\Column(type="string")
     */
    protected $goods_number;
    

    public function getExtraInfo()
    {
        return $this->parseRemark();
    }

    public function parseRemark()
    {
        $remark = $this->getField('remark');
        preg_match_all("/(\[)(.*?)(\])/", $remark, $aMatches);
        $array = array();
        
        foreach ($aMatches[2] as $match) {
            $parameters = explode('=', $match);
            $array[$parameters[0]] = $parameters[1];
        }
        
        return $array;
    }
}