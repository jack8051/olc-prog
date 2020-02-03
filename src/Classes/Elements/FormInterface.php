<?php

/**
 * Interface pro html element FORM.
 *
 * @author Jan Stanek <jack51@seznam.cz>
 */

namespace Classes\Elements;

use Classes\Attributes\TargetInterface;

interface FormInterface extends TargetInterface
{
    public function setAction($action);

    public function getAction();

    public function setMethod($method);

    public function getMethod();
}