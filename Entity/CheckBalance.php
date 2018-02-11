<?php
/**
 * Created by PhpStorm.
 * User: bike
 * Date: 15.01.18
 * Time: 16:37
 */

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class CheckBalance
 * @ORM\Entity
 * @ORM\Table(name="cm_check_balance")
 */
class CheckBalance extends CollmexObject
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
    protected $type_identifier = 'ACCBAL';
    /**
     * @ORM\Column(type="string")
     */
    protected $bank_account_number;
    /**
     * @ORM\Column(type="string")
     */
    protected $bank_account_name;
    /**
     * @ORM\Column(type="string")
     */
    protected $credit;

}