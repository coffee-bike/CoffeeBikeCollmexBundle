<?php

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cm_vendor_agreement")
 */
class VendorAgreement extends CollmexObject
{
    /**
     * @ORM\Column(type="string")
     */
    protected $type_identifier ='CMXVAG';
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $company_id;
    /**
     * @ORM\Column(type="integer")
     */
    protected $vendor_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $vendor_name;
    /**
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
    protected $base_quantity_unit;
    /**
     * @ORM\Column(type="string")
     */
    protected $vendor_product_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $agreement_name;
    /**
     * @ORM\Column(type="decimal")
     */
    protected $packaging_unit;
    /**
     * @ORM\Column(type="integer")
     */
    protected $tax_classification;
    /**
     * @ORM\Column(type="integer")
     */
    protected $priority;
    /**
     * @ORM\Column(type="integer")
     */
    protected $reserved;
    /**
     * @ORM\Column(type="integer")
     */
    protected $reserved1;
    /**
     * @ORM\Column(type="integer")
     */
    protected $reserved2;
    /**
     * @ORM\Column(type="integer")
     */
    protected $reserved3;
    /**
     * @ORM\Column(type="integer")
     */
    protected $reserved4;
    /**
     * @ORM\Column(type="integer")
     */
    protected $position;
    /**
     * @ORM\Column(type="date")
     */
    protected $date_from ;
    /**
     * @ORM\Column(type="date")
     */
    protected $date_to;
    /**
     * @ORM\Column(type="integer")
     */
    protected $delivery_time;
    /**
     * @ORM\Column(type="decimal")
     */
    protected $price;
    /**
     * @ORM\Column(type="string")
     */
    protected $currency;
    /**
     * @ORM\Column(type="decimal")
     */
    protected $price_quantity;


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