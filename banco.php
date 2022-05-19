<?php

require 'funcoes.php';

$contasCorrentes = [
    120 => [
        'titular' => 'Pedro',
        'saldo' => 1000
    ], 
    121 => [
        'titular' => 'Lucas',
        'saldo' => 2000
    ], 
    123 => [
        'titular' => 'Dias',
        'saldo' => 4000
    ]
];

foreach($contasCorrentes as $chave => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem("$chave => $titular, Saldo: $saldo");
}