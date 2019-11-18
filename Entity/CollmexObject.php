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

namespace CoffeeBike\CollmexBundle\Entity;


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
            if ($key != 'extraInfo' && $key != 'id') {
                $this->$key = $aTemplate[$i];
                $i++;
            }
        }
    }

    public function getData()
    {
        $data = array();

        foreach ($this as $key => $value) {
            if ($key != 'extraInfo' && $key != 'id') {
                $data[$key] = $value;
            }
        }

        return $data;
    }

    public function setField($key, $value)
    {
        $this->$key = $value;
    }

    public function getField($key)
    {
        return $this->$key;
    }

    public function unsetField($key)
    {
        unset($this->$key);
    }

}