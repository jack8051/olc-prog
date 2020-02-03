<?php

/**
 * Trait pro atribut Disabled.
 *
 * @author Jan Stanek <jack51@seznam.cz>
 */

namespace Classes\Attributes;

trait DisabledTrait
{
    private $disabled = null;

    public function setDisabled($disabled)
    {
        $this->disabled = $disabled;
        return $this;
    }

    public function getDisabled()
    {
        return $this->disabled;
    }

    protected function renderDisabled()
    {
        if($this->disabled){
            print ' disabled';
        }
        return $this;
    }
}