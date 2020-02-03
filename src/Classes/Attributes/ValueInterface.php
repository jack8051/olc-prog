<?php

/**
 * Interface pro atribut Value.
 *
 * @author Jan Stanek <jack51@seznam.cz>
 */

namespace Classes\Attributes;

interface ValueInterface
{
    public function setValue($value);

    public function getValue();

}