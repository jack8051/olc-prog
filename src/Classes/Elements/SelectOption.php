<?php

/**
 * Trida pro element polozka SELECTu.
 *
 * @author Jan Stanek <jack51@seznam.cz>
 */

namespace Classes\Elements;

use Classes\Attributes\DisabledTrait;
use Classes\Attributes\ValueTrait;
use Classes\Element;


class SelectOption extends Element implements SelectOptionInterface
{
    use ValueTrait;
    use DisabledTrait;

    private $title = null;
    private $selected = null;

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    protected function renderTitle()
    {
        if ($this->title) {
            print $this->title;
        }
        return $this;
    }

    public function setSelected($selected)
    {
        $this->selected = $selected;
        return $this;
    }

    public function getSelected()
    {
        return $this->selected;
    }

    protected function renderSelected()
    {
        if ($this->selected) {
            print ' selected';
        }
        return $this;
    }

    public function render()
    {
        print '<option';

        $this->renderId();
        $this->renderClass();
        $this->renderValue();

        $this->renderSelected();
        $this->renderDisabled();

        print '>';

        $this->renderTitle();

        print '</option>';
    }
}