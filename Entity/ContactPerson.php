<?php
/**
 * Created by PhpStorm.
 * User: bike
 * Date: 19.01.18
 * Time: 10:37
 */

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class ContactPerson
 * @package CoffeeBike\CollmexBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="cm_contact_person")
 */
class ContactPerson extends CollmexObject
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
    protected $type_identifier = 'CMXASP';
    /**
     * @ORM\Column(type="string")
     */
    protected $address_id;
    /**
     * @ORM\Column(type="string")
     */
    protected $address_type;
    /**
     * @ORM\Column(type="string")
     */
    protected $salutation;
    /**
     * @ORM\Column(type="string")
     */
    protected $title;
    /**
     * @ORM\Column(type="string")
     */
    protected $forename;
    /**
     * @ORM\Column(type="string")
     */
    protected $last_name;
    /**
     * @ORM\Column(type="string")
     */
    protected $company;
    /**
     * @ORM\Column(type="string")
     */
    protected $department;
    /**
     * @ORM\Column(type="string")
     */
    protected $street;
    /**
     * @ORM\Column(type="string")
     */
    protected $postal_code;
    /**
     * @ORM\Column(type="string")
     */
    protected $city;
    /**
     * @ORM\Column(type="string")
     */
    protected $country;
    /**
     * @ORM\Column(type="string")
     */
    protected $phone;
    /**
     * @ORM\Column(type="string")
     */
    protected $phone2;
    /**
     * @ORM\Column(type="string")
     */
    protected $fax;
    /**
     * @ORM\Column(type="string")
     */
    protected $email;
    /**
     * @ORM\Column(type="string")
     */
    protected $notice;
    /**
     * @ORM\Column(type="string")
     */
    protected $URL;
    /**
     * @ORM\Column(type="string")
     */
    protected $no_mailings;
    /**
     * @ORM\Column(type="string")
     */
    protected $address_group;
}