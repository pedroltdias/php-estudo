<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\Funcionario\{Diretor, Funcionario, Gerente, Desenvolvedor, EditorVideo};

$desenvolvedor = new Desenvolvedor(
    "Pedro Dias", 
    new CPF('123.456.789-10'), 
    1000
);

$desenvolvedor->sobeDeNivel();

$gerente = new Gerente(
    "Paulo Dias", 
    new CPF('987.654.321-10'), 
    3000
);

$diretor = new Diretor(
    "Mauh Dias", 
    new CPF('700.070.007-07'), 
    5000
);

$editor = new EditorVideo(
    "Mada Dias",
    new CPF('546.987.213-10'),
    4000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($desenvolvedor);
$controlador->adicionaBonificacaoDe($gerente);
$controlador->adicionaBonificacaoDe($diretor);
$controlador->adicionaBonificacaoDe($editor);

echo $controlador->recuperaTotal();