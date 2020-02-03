<?php

/**
 * Autolader souboru s Tridami.
 *
 * @author Jan Stanek <jack51@seznam.cz>
 */

spl_autoload_register(function($className) {

    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);

    $fileName = stream_resolve_include_path($_SERVER['DOCUMENT_ROOT'] . "/../src/" . $className . '.php');
    if ($fileName !== false) {
        include_once $fileName;
    }
});