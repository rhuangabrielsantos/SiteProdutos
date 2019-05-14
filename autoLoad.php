<?php

function load($namespace)
{
    $namespace = str_replace("\\", "/", $namespace);

    $caminho = __DIR__ . "/" . $namespace . ".php";

    return include_once $caminho;
}

spl_autoload_register(__NAMESPACE__ . "\load");
