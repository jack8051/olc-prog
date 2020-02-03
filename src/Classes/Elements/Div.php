<?php

/**
 * Trida pro element DIV.
 *
 * @author Jan Stanek <jack51@seznam.cz>
 */

namespace Classes\Elements;

use Classes\Attributes\InnerHtmlTrait;
use Classes\BlockElement;

class Div extends BlockElement implements DivInterface
{
    use InnerHtmlTrait;

    public function render()
    {

        print '<div ';

        $this->renderClass();
        $this->renderStyle();

        print '>';

        $this->renderInnerHtml();
        $this->renderChilderns();

        print '</div>';

        return $this;
    }
}