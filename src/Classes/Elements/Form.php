<?php

/**
 * Trida pro element FORM.
 *
 * @author Jan Stanek <jack51@seznam.cz>
 */

namespace Classes\Elements;

use Classes\Attributes\TargetTrait;
use Classes\BlockElement;

class Form extends BlockElement implements FormInterface
{
    use TargetTrait;

    private $action = null;
    private $method = null;

    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    public function getAction()
    {
        return $this->action;
    }

    protected function renderAction()
    {
        if ($this->action) {
            print ' action="' . $this->action . '"';
        }
        return $this;
    }

    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    public function getMethod()
    {
        return $this->method;
    }

    protected function renderMethod()
    {
        if ($this->method) {
            print ' method="' . $this->method . '"';
        }
        return $this;
    }

    public function render()
    {
        print '<form';

        $this->renderAction();
        $this->renderMethod();
        $this->renderTarget();

        $this->renderClass();
        $this->renderStyle();

        print '>';

        $this->renderChilderns();

        print '</form>';

        return $this;
    }
}