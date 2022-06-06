<?php

function funcao1()
{
    echo 'Inicio da funcao 1' . PHP_EOL;
    
    try{
        $arrayFixo = new SplFixedArray(2);   
        $arrayFixo[3] = 'Valor';
    } catch (RuntimeException $problema) {
        echo 'Aconteceu um erro na funcao 1' . PHP_EOL;
    }

    // $divisao = intdiv(5, 0); 
    funcao2();
    echo 'Fim da funcao 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Inicio da funcao 2' . PHP_EOL;
    for ($i=0; $i <= 5; $i++) { 
        echo $i . PHP_EOL;
    }
    echo 'Fim da funcao 2' . PHP_EOL;
}

echo 'Inicio do programa principal' . PHP_EOL;
funcao1();
echo 'Fim do programa principal' . PHP_EOL;