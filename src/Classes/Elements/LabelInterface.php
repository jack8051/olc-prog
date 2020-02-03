<?php

/**
 * Interface pro html element LABEL.
 *
 * @author Jan Stanek <jack51@seznam.cz>
 */

namespace Classes\Elements;

interface LabelInterface
{
    public function setLabel($label);

    public function getLabel();

    public function setFor($for);

    public function getFor();
}