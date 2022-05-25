<?php

$dados = ['Vinicius', 10, 24];
// list($nome, $nota, $idade) = $dados;
[$nome, $nota, $idade] = $dados;
 
var_dump($nome, $nota, $idade);