<?php
/**
 * Created by PhpStorm.
 * User: bike
 * Date: 16.01.18
 * Time: 16:32
 */

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Batch
 * @package CoffeeBike\CollmexBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="cm_batch")
 */
class Batch extends CollmexObject
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
    protected $type_identifier = 'CMXBTC';
    /**
     * @ORM\Column(type="string")
     */
    protected $company_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $batch_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $product_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $description;
}