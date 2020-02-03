<?php

/**
 * Interface pro html element typu obrazek.
 *
 * @author Jan Stanek <jack51@seznam.cz>
 */

namespace Classes\Elements;

interface ImgInterface
{
    public function setSrc($src);

    public function getSrc();

    public function setAlt($alt);

    public function getAlt();

    public function setWidth($width);

    public function getWidth();

    public function setHeight($height);

    public function getHeight();
}