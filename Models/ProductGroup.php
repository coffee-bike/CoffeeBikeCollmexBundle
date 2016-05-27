<?php

namespace CoffeeBike\CollmexBundle\Models;


class ProductGroup
{
    protected $template = array(
        'type_identifier' => 'PRDGRP',
        'productgroup_id' => null,
        'name' => null,
        'is_subgroup_from_id' => null,

    );


    public function setData($aTemplate)
    {
        $i = 0;
        foreach ($this->template as $key => $value) {
            $this->template[$key] = $aTemplate[$i];
            $i++;
        }
    }

    public function getData($key)
    {
        return $this->template[$key];
    }

    public function setField($key, $value)
    {
        $this->template[$key] = $value;
    }

    public function getField($key)
    {
        return $this->template[$key];
    }

}