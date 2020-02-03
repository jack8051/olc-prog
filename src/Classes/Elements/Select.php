<?php

/**
 * Trida pro element SELECT.
 *
 * @author Jan Stanek <jack51@seznam.cz>
 */

namespace Classes\Elements;

use Classes\Attributes\NameTrait;
use Classes\BlockElement;


class Select extends BlockElement implements SelectInterface
{
    use NameTrait;

    public function render()
    {
        print '<select';

        $this->renderId();
        $this->renderName();
        $this->renderClass();
        $this->renderStyle();

        print '>';

        $this->renderChilderns();

        print '</select>';

        return $this;
    }
}