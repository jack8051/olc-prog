<?php

/**
 * Trait pro atribut innerHtml.
 *
 * @author Jan Stanek <jack51@seznam.cz>
 */

namespace Classes\Attributes;

trait InnerHtmlTrait
{

    private $innerHtml = null;

    public function setInnerHtml($innerHtml)
    {
        $this->innerHtml = $innerHtml;
        return $this;
    }

    public function getInnerHtml()
    {
        return $this->innerHtml;
    }

    protected function renderInnerHtml()
    {
        if($this->innerHtml){
            print $this->innerHtml;
        }
    }
}