<?php

namespace CoffeeBike\CollmexBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cm_product_group")
 */
class ProductGroup extends CollmexObject
{
    /**
     * @ORM\Column(type="string")
     */
    protected $type_identifier;
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $productgroup_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $name;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $is_subgroup_from_id = 0;
}