<?php
/**
 * Created by PhpStorm.
 * User: bike
 * Date: 18.01.18
 * Time: 11:54
 */

namespace CoffeeBike\CollmexBundle\Entity;

namespace CoffeeBike\CollmexBundle\Entity;

/**
 * Class Activities
 * @package CoffeeBike\CollmexBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="cm_activities")
 */
class Activities extends CollmexObject
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
    protected $type_identifier = 'CMXACT';
    /**
     * @ORM\Column(type="string")
     */
    protected $project_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $employee_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $company_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $sentence_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $description;
    /**
     * @ORM\Column(type="string")
     */
    protected $date;
    /**
     * @ORM\Column(type="string")
     */
    protected $from;
    /**
     * @ORM\Column(type="string")
     */
    protected $until;
    /**
     * @ORM\Column(type="string")
     */
    protected $break;
    /**
     * @ORM\Column(type="string")
     */
    protected $product_id;
}