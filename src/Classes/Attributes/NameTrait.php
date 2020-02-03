<?php

/**
 * Trait pro atribut Name.
 *
 * @author Jan Stanek <jack51@seznam.cz>
 */

namespace Classes\Attributes;

trait NameTrait
{
    private $name = null;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    protected function renderName()
    {
        if($this->name){
            print ' name="'.$this->name.'"';
        }
    }
}