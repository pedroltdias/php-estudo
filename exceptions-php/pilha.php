<?php

function funcao1()
{
    echo 'Inicio da funcao 1' . PHP_EOL;

    try{
        funcao2();
    } catch (Exception $problema) {
        echo $problema->getMessage() . PHP_EOL;
        echo $problema->getLine() . PHP_EOL;
        echo $problema->getTraceAsString() . PHP_EOL;
    }

    
    echo 'Fim da funcao 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Inicio da funcao 2' . PHP_EOL;

    $exception = new RuntimeException();
    throw $exception;

    echo 'Fim da funcao 2' . PHP_EOL;
}

echo 'Inicio do programa principal' . PHP_EOL;
funcao1();
echo 'Fim do programa principal' . PHP_EOL;