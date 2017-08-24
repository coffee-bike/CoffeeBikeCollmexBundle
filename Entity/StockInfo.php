<?php

namespace CoffeeBike\CollmexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cm_stock_info")
 */
class StockInfo extends CollmexObject
{
    /**
     * @ORM\Column(type="string")
     */
    protected $type_identifier ='STOCK_AVAILABLE';
    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    protected $product_id;
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $company_id;
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $stock_available;
    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    protected $volume_unit;
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $reorder_time;
    

    public function parseRemark()
    {
        $remark = $this->getField('remark');
        preg_match_all("/(\[)(.*?)(\])/", $remark, $aMatches);
        $array = array();

        foreach ($aMatches[2] as $match) {
            $parameters = explode('=', $match);
            $array[$parameters[0]] = $parameters[1];
        }

        return $array;
    }
}