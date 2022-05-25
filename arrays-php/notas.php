<?php

$notas = [
    'Maria'     => 9,
    'Ana'       => 10,
    'João'      => 8,
    'Vinicius'  => null,
    'Roberto'   => 7,
];


// krsort($notas);      //Ordena pelas chaves em ordem alfabetica inversa
// ksort($notas);       //Ordena pelas chaves em ordem alfabetica
// arsort($notas);      //Ordena e Mantem as Chaves
// rsort($notas);       //Inverte a ordem
// uksort($notas);      //Ordena pelas chaves 

var_dump($notas);

// if(is_array($notas)){
//     echo "Sim, é um array" . PHP_EOL;
// }

// var_dump(array_is_list($notas));

// var_dump(array_key_exists('Vinicius', $notas)); //verifica se um elemento ou chave existe no array

// var_dump(isset($notas['Vinicius'])); //verifica se um elemento ou chave existe no array e é diferente de nulo

var_dump(in_array(10, $notas)); //verifica se existe o valor '10' no array -> converte valores

echo array_search(10, $notas); //retorna a chave com valor == 10