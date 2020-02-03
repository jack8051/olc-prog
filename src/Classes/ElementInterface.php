<?php

/**
 * Interface pro html element.
 *
 * @author Jan Stanek <jack51@seznam.cz>
 */

namespace Classes;

interface ElementInterface
{
    public function setId($id);

    public function getId();

    public function setClass($class);

    public function getClass();

    public function setStyle($style);

    public function getStyle();

    public function render();
}