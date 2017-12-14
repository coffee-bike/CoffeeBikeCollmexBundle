<?php

namespace CoffeeBike\CollmexBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cm_product_group")
 */
class PriceGroup extends CollmexObject
{
    /**
     * @ORM\Column(type="string")
     */
    protected $type_identifier = "PRICE_GROUP";
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $company_id;
    /**
     * @ORM\Column(type="integer")
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     */
    protected $name;
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $gross_prices;
    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    protected $currency;
}