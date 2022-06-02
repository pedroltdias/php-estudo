<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$endereco1 = new Endereco('Cidade 1', 'Bairro 1', 'Rua 1', '1');
$endereco2 = new Endereco('Cidade 2', 'Bairro 2', 'Rua 2', '2');

echo $endereco1->bairro;

exit();

echo $endereco1 . PHP_EOL;
echo $endereco2;