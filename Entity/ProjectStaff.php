<?php
/**
 * Created by PhpStorm.
 * User: bike
 * Date: 18.01.18
 * Time: 12:19
 */

namespace CoffeeBike\CollmexBundle\Entity;

namespace CoffeeBike\CollmexBundle\Entity;

/**
 * Class ProjectStaff
 * @package CoffeeBike\CollmexBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="cm_project_staff")
 */
class ProjectStaff extends CollmexObject
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
    protected $type_identifier = 'PROJECT_STAFF';
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
    protected $employee_company_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $name;
}