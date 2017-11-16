<?php

namespace CoffeeBike\CollmexBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cm_product_price")
 */
class ProductPrice extends CollmexObject
{
    /**
     * @ORM\Column(type="string")
     */
    protected $type_identifier  ='CMXPRI';
    /**
     * @ORM\Column(type="string")
     */
    protected $product_id;
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $company_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $price_group;
    /**
     * @ORM\Column(type="date")
     */
    protected $date_from;
    /**
     * @ORM\Column(type="date")
     */
    protected $date_to;
    /**
     * @ORM\Column(type="date")
     */
    protected $retail_price;
}