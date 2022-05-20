<?php

$notas = [
    'Maria'     => 9,
    'Ana'       => 10,
    'João'      => 8,
    'Vinicius'  => 6,
    'Roberto'   => 7,
];


// krsort($notas);      //Ordena pelas chaves em ordem alfabetica inversa
// ksort($notas);       //Ordena pelas chaves em ordem alfabetica
// arsort($notas);      //Ordena e Mantem as Chaves
// rsort($notas);       //Inverte a ordem
// uksort($notas);      //Ordena pelas chaves 

var_dump($notas);

if(is_array($notas)){
    echo "Sim, é um array" . PHP_EOL;
}

var_dump(array_is_list($notas));