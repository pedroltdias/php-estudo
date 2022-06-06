<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new CPF('123.456.798-10'),
        'Pedro Dias',
        new Endereco('Cidade', 'Bairro', 'Rua', 'Numero')
    )
);

try {
    $contaCorrente->deposita(-100);
} catch (InvalidArgumentException $e) {
    echo "Valor a depositar precisa ser positivo, seu safado pilantrinha";
}