<?php

/**
 * Trida pro element INPUT.
 *
 * @author Jan Stanek <jack51@seznam.cz>
 */

namespace Classes\Elements;

use Classes\Attributes\DisabledTrait;
use Classes\Attributes\NameTrait;
use Classes\Attributes\ValueTrait;
use Classes\Element;

class Input extends Element implements InputInterface
{
    use NameTrait;
    use ValueTrait;
    use DisabledTrait;

    private $type = null;
    private $placeholder = null;
    private $readonly = false;
    private $autofocus = false;
    private $checked = false;

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    protected function renderType()
    {
        if ($this->type) {
            print ' type="' . $this->type . '"';
        }
        return $this;
    }

    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
        return $this;
    }

    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    protected function renderPlaceholder()
    {
        if ($this->placeholder) {
            print ' placeholder="' . $this->placeholder . '"';
        }
        return $this;
    }

    public function setReadonly($readonly)
    {
        $this->readonly = $readonly;
        return $this;
    }

    public function getReadonly()
    {
        return $this->readonly;
    }

    protected function renderReadonly()
    {
        if ($this->readonly) {
            print ' readonly';
        }
        return $this;
    }

    public function setAutofocus($autofocus)
    {
        $this->autofocus = $autofocus;
        return $this;
    }

    public function getAutofocus()
    {
        return $this->autofocus;
    }

    protected function renderAutofocus()
    {
        if ($this->autofocus) {
            print ' autofocus';
        }
        return $this;
    }

    public function setChecked($checked)
    {
        $this->checked = $checked;
        return $this;
    }

    public function getChecked()
    {
        return $this->checked;
    }

    protected function renderChecked()
    {
        if ($this->checked) {
            print ' checked';
        }
        return $this;
    }

    public function render()
    {
        print "<input";

        $this->renderType();
        $this->renderName();
        $this->renderValue();

        $this->renderClass();
        $this->renderStyle();

        $this->renderPlaceholder();
        $this->renderAutofocus();
        $this->renderReadonly();
        $this->renderDisabled();
        $this->renderChecked();

        print " />";

        return $this;
    }
}