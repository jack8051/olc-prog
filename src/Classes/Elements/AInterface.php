<?php

/**
 * Interface pro html element typu odkaz.
 *
 * @author Jan Stanek <jack51@seznam.cz>
 */

namespace Classes\Elements;

use Classes\Attributes\InnerHtmlInterface;
use Classes\Attributes\NameInterface;
use Classes\Attributes\TargetInterface;

interface AInterface extends NameInterface, TargetInterface, InnerHtmlInterface
{

    public function setHref($href);

    public function getHref();
}