<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, SaldoInsuficienteException, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'), 
        'Pedro Dias', 
        new Endereco('Brasilia', 'Bairro', 'Rua', '10')
    )
);

$conta->deposita(500);
try {
    $conta->saca(600);
} catch (SaldoInsuficienteException $e) {
    echo "Voce nao tem saldo suficiente para realizar este saque!" . PHP_EOL;
    echo $e->getMessage() . PHP_EOL;
}
