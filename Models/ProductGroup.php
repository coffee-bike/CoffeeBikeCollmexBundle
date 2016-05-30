<?php

namespace CoffeeBike\CollmexBundle\Models;


class ProductGroup extends CollmexObject
{
    protected $template = array(
        'type_identifier' => 'PRDGRP',
        'productgroup_id' => null,
        'name' => null,
        'is_subgroup_from_id' => null,

    );
}