<?php
/**
 * Created by PhpStorm.
 * User: bike
 * Date: 19.01.18
 * Time: 14:42
 */

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class ShipmentNumber
 * @package CoffeeBike\CollmexBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="cm_shipment_number")
 */
class ShipmentNumber extends CollmexObject
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
    protected $type_identifier = 'TRACKING_NUMBER';
    /**
     * @ORM\Column(type="string")
     */
    protected $delivery_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $shipment_id;
}