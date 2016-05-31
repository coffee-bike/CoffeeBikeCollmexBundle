<?php
/**
 * PROJECT: CoffeeBikeCollmexBundle
 *
 * IDE: IntelliJ IDEA
 * User: dambacher
 * Date: 30.05.16
 * Time: 11:42
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\CollmexBundle\Models;


class CollmexObject
{
    /**
     * Formally validates the type data in $data attribute.
     *
     * @return bool Validation success
     */
    protected function validate()
    {
        // TODO: Implement validate() method.
    }

    public function setData($aTemplate)
    {
        $i = 0;
        foreach ($this as $key => $value) {
            $this->$key = $aTemplate[$i];
            $i++;
        }
    }

    public function getData()
    {
        return $this;
    }

    public function setField($key, $value)
    {
        $this->$key = $value;
    }

    public function getField($key)
    {
        return $this->$key;
    }

}