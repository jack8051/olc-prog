<?php

/**
 * Trida pro element LABEL.
 *
 * @author Jan Stanek <jack51@seznam.cz>
 */

namespace Classes\Elements;

use Classes\BlockElement;

class Label extends BlockElement implements LabelInterface
{
    private $label;
    private $for;

    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    public function getLabel()
    {
        return $this->label;
    }

    protected function renderLabel()
    {
        if ($this->label) {
            print $this->label;
        }
        return $this;
    }

    public function setFor($for)
    {
        $this->for = $for;
        return $this;
    }

    public function getFor()
    {
        return $this->for;
    }

    protected function renderFor()
    {
        if ($this->for) {
            print ' for="' . $this->for . '"';
        }
        return $this;
    }

    public function render()
    {
        print '<label';

        $this->renderFor();
        $this->renderClass();
        $this->renderStyle();

        print '>';

        $this->renderChilderns();
        $this->renderLabel();

        print '</label>';
    }
}