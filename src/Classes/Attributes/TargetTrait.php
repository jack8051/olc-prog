<?php

/**
 * Trait pro atribut Target.
 *
 * @author Jan Stanek <jack51@seznam.cz>
 */

namespace Classes\Attributes;

trait TargetTrait
{
    private $target = null;

    public function setTarget($target)
    {
        $this->target = $target;
        return $this;
    }

    public function getTarget()
    {
        return $this->target;
    }

    protected function renderTarget()
    {
        if($this->target){
            print ' target="'.$this->target.'"';
        }
    }
}