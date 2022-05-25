<?php

spl_autoload_register (function ($classe){

    $prefixo = "App\\";

    $diretorio = __DIR__ . '/src/';

    if (strncmp($prefixo, $classe, strlen($prefixo)) !== 0) {
        return;
    };

    var_dump($classe);
});