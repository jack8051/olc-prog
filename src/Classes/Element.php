<?php

/**
 * Abstraktni trida pro html element.
 *
 * @author Jan Stanek <jack51@seznam.cz>
 */

namespace Classes;


abstract class Element implements ElementInterface
{
    private $id = null;
    private $class = null;
    private $style = null;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function setStyle($style)
    {
        $this->style = $style;
        return $this;
    }

    public function getStyle()
    {
        return $this->style;
    }

    protected function renderId()
    {
        if ($this->id) {
            print ' id="' . $this->id . '"';
        }
        return $this;
    }

    protected function renderClass()
    {
        if ($this->class) {
            print ' class="' . $this->class . '"';
        }
        return $this;
    }

    protected function renderStyle()
    {
        if ($this->style) {
            print ' style="' . $this->style . '"';
        }
        return $this;
    }

}