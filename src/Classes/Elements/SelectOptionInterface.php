<?php

/**
 * Interface pro html element polzka SELECTu.
 *
 * @author Jan Stanek <jack51@seznam.cz>
 */

namespace Classes\Elements;

use Classes\Attributes\DisabledInterface;
use Classes\Attributes\ValueInterface;

interface SelectOptionInterface extends ValueInterface, DisabledInterface
{
    public function setSelected($selected);

    public function getSelected();

    public function setTitle($title);

    public function getTitle();
}