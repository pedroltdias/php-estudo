<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\Funcionario\{Diretor, Funcionario, Gerente, Desenvolvedor};

$desenvolvedor = new Desenvolvedor(
    "Pedro Dias", 
    new CPF('123.456.789-10'), 
    'Desenvolvedor', 
    1000
);

$desenvolvedor->sobeDeNivel();

$gerente = new Gerente(
    "Paulo Dias", 
    new CPF('987.654.321-10'), 
    'Gerente', 
    3000
);

$diretor = new Diretor(
    "Mauh Dias", 
    new CPF('700.070.007-07'), 
    'Diretor', 
    5000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($desenvolvedor);
$controlador->adicionaBonificacaoDe($gerente);
$controlador->adicionaBonificacaoDe($diretor);

echo $controlador->recuperaTotal();