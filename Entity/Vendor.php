<?php
/**
 * Created by PhpStorm.
 * User: bike
 * Date: 18.01.18
 * Time: 09:26
 */

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Vendor
 * @package CoffeeBike\CollmexBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="cm_vendor")
 */
class Vendor extends CollmexObject
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
    protected $type_identifier = 'CMXLIF';
    /**
     * @ORM\Column(type="string")
     */
    protected $supplier_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $company_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $text;
    /**
     * @ORM\Column(type="string")
     */
    protected $due_resubmission;
    /**
     * @ORM\Column(type="string")
     */
    protected $postal_code_country;
    /**
     * @ORM\Column(type="string")
     */
    protected $changes_only;
    /**
     * @ORM\Column(type="string")
     */
    protected $system_name;
}