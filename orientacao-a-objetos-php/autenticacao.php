<?php

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente};
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$diretor = new Diretor(
    'Diretor Zé', 
    new CPF('123.456.789-10'), 
    10000
);

$gerente = new Gerente(
    'Gerente Zé', 
    new CPF('321.456.789-20'), 
    10000
);

// $titular = new Titular(
//     new CPF('321.741.963-30'),
//     'Titular Zé',
//     new Endereco('Cidade', 'Bairro', 'rua', 'numero')
// );

$autenticador->tentaLogin($diretor, '1234');
$autenticador->tentaLogin($gerente, '4321');
// $autenticador->tentaLogin($titular, 'abcd');