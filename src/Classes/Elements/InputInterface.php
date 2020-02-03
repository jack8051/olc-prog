<?php

/**
 * Interface pro html element INPUT.
 *
 * @author Jan Stanek <jack51@seznam.cz>
 */

namespace Classes\Elements;

use Classes\Attributes\DisabledInterface;
use Classes\Attributes\NameInterface;
use Classes\Attributes\ValueInterface;

interface InputInterface extends NameInterface, ValueInterface, DisabledInterface
{
    public function setType($type);

    public function getType();

    public function setPlaceholder($placeholder);

    public function getPlaceholder();

    public function setReadonly($readonly);

    public function getReadonly();

    public function setAutofocus($autofocus);

    public function getAutofocus();

    public function setChecked($checked);

    public function getChecked();
}