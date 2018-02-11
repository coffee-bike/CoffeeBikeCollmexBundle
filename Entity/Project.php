<?php
/**
 * Created by PhpStorm.
 * User: bike
 * Date: 18.01.18
 * Time: 11:37
 */

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Project
 * @package CoffeeBike\CollmexBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="cm_project")
 */
class Project extends CollmexObject
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
    protected $type_identifier = 'CMXPRJ';
    /**
     * @ORM\Column(type="string")
     */
    protected $project_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $company_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $project_description;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $customer_name;
    /**
     * @ORM\Column(type="string")
     */
    protected $finished;
    /**
     * @ORM\Column(type="string")
     */
    protected $budget;
    /**
     * @ORM\Column(type="string")
     */
    protected $worth;
    /**
     * @ORM\Column(type="string")
     */
    protected $possible_employee;
    /**
     * @ORM\Column(type="string")
     */
    protected $sentence_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $sentence_description;
    /**
     * @ORM\Column(type="string")
     */
    protected $project_number;
    /**
     * @ORM\Column(type="string")
     */
    protected $sentence;
    /**
     * @ORM\Column(type="string")
     */
    protected $currency;
    /**
     * @ORM\Column(type="string")
     */
    protected $quantity_unit;
    /**
     * @ORM\Column(type="string")
     */
    protected $inactive;
}