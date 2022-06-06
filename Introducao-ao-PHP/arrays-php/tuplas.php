<?php

$dados = [
    'nome'  => 'Vinicius', 
    'nota'  => 10, 
    'idade' => 24
];
// list($nome, $nota, $idade) = $dados;
// [$nome, $nota, $idade] = $dados;

extract($dados); //'extrai' chaves para variaveis
 
var_dump($nome, $nota, $idade);

var_dump(compact('nome', 'nota', 'idade')); //'compacta' variaveis separadas em um array