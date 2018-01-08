<?php

namespace CoffeeBike\CollmexBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

class PriceGroup extends CollmexObject
{
    protected $type_identifier = "PRICE_GROUP";
    protected $company_id;
    protected $id;
    protected $name;
    protected $gross_prices;
    protected $currency;
}
