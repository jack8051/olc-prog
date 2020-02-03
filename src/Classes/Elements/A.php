<?php

/**
 * Trida pro element typu odkaz.
 *
 * @author Jan Stanek <jack51@seznam.cz>
 */

namespace Classes\Elements;

use Classes\Attributes\InnerHtmlTrait;
use Classes\Attributes\NameTrait;
use Classes\Attributes\TargetTrait;
use Classes\BlockElement;

class A extends BlockElement implements AInterface
{
    use NameTrait;
    use TargetTrait;
    use InnerHtmlTrait;

    private $href = null;

    public function setHref($href)
    {
        $this->href = $href;
        return $this;
    }

    public function getHref()
    {
        return $this->href;
    }

    protected function renderHref()
    {
        if ($this->href) {
            print ' href="' . $this->href . '"';
        }
        return $this;
    }

    public function render()
    {
        print '<a';

        $this->renderId();
        $this->renderHref();
        $this->renderName();
        $this->renderClass();
        $this->renderStyle();
        $this->renderTarget();

        print '>';

        $this->renderInnerHtml();
        $this->renderChilderns();

        print '</a>';

        return $this;
    }
}