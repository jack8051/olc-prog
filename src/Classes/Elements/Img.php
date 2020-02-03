<?php

/**
 * Trida pro element typu obrazek.
 *
 * @author Jan Stanek <jack51@seznam.cz>
 */

namespace Classes\Elements;

use Classes\Element;

class Img extends Element implements ImgInterface
{
    private $src = null;
    private $alt = null;
    private $width = null;
    private $height = null;

    public function setSrc($src)
    {
        $this->src = $src;
        return $this;
    }

    public function getSrc()
    {
        return $this->src;
    }

    protected function renderSrc()
    {
        if ($this->src) {
            print ' src="' . $this->src . '"';
        }
        return $this;
    }

    public function setAlt($alt)
    {
        $this->alt = $alt;
        return $this;
    }

    public function getAlt()
    {
        return $this->alt;
    }

    protected function renderAlt()
    {
        if ($this->alt) {
            print ' alt="' . $this->alt . '"';
        }
        return $this;
    }

    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }


    public function getWidth()
    {
        return $this->width;
    }

    protected function renderWidth()
    {
        if ($this->width) {
            print ' width="' . $this->width . '"';
        }
        return $this;
    }

    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    public function getHeight()
    {
        return $this->height;
    }

    protected function renderHeight()
    {
        if ($this->height) {
            print ' height="' . $this->height . '"';
        }
        return $this;
    }

    public function render()
    {
        print '<img';

        $this->renderId();
        $this->renderSrc();
        $this->renderAlt();
        $this->renderWidth();
        $this->renderHeight();

        $this->renderClass();
        $this->renderStyle();

        print ' />';

        return $this;
    }
}