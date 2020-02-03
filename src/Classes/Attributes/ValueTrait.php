<?php

/**
 * Trait pro atribut Value.
 *
 * @author Jan Stanek <jack51@seznam.cz>
 */

namespace Classes\Attributes;

trait ValueTrait
{
    private $value = null;

    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }

    protected function renderValue()
    {
        if($this->value){
            print ' value="'.$this->value.'"';
        }
    }
}