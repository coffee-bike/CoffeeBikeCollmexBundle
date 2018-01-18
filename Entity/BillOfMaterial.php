<?php
/**
 * Created by PhpStorm.
 * User: bike
 * Date: 18.01.18
 * Time: 15:38
 */

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class PBillOfMaterial
 * @package CoffeeBike\CollmexBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="cm_bill_of_material")
 */
class BillOfMaterial extends CollmexObject
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
    protected $type_identifier = 'CMXBOM';
    /**
     * @ORM\Column(type="string")
     */
    protected $product_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $company_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $version;
    /**
     * @ORM\Column(type="string")
     */
    protected $use;
    /**
     * @ORM\Column(type="string")
     */
    protected $valid_from;
    /**
     * @ORM\Column(type="string")
     */
    protected $text;
    /**
     * @ORM\Column(type="string")
     */
    protected $position_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $component_product_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $quantity;
    /**
     * @ORM\Column(type="string")
     */
    protected $reference_quantity;
}