<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{Funcionario, CPF};
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Funcionario(
    "Pedro Dias", 
    new CPF('123.456.789-10'), 
    'Desenvolvedor', 
    1000
);

$doisFuncionario = new Funcionario(
    "Paulo Dias", 
    new CPF('987.654.321-10'), 
    'Desenvolvedor', 
    3000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($doisFuncionario);

echo $controlador->recuperaTotal();