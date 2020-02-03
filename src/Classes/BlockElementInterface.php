<?php

/**
 * Interface pro blokovy html element (obsahujici vnorene elementy).
 *
 * @author Jan Stanek <jack51@seznam.cz>
 */

namespace Classes;

interface BlockElementInterface
{
    public function addChildern($childern);

    public function getChildrens();

    public function renderChilderns();
}