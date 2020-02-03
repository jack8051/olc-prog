<?php

/**
 * Abstraktni trida pro blokovy html element (obsahujici vnorene elementy).
 *
 * @author Jan Stanek <jack51@seznam.cz>
 */

namespace Classes;

abstract class BlockElement extends Element implements BlockElementInterface
{
    private $childerns = [];

    public function addChildern($childern)
    {
        $this->childerns[] = $childern;
        return $this;
    }

    public function getChildrens()
    {
        return $this->childerns;
    }

    public function renderChilderns()
    {
        foreach($this->childerns as $childern) {
            $childern->render();
        }
        return $this;
    }
}