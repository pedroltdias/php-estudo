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

$contasCorrentes['120'] = sacar($contasCorrentes['120'], 500);

$contasCorrentes['121'] = depositar($contasCorrentes['121'], 1000);

unset($contasCorrentes[123]);

titularComLetrasMaiusculas($contasCorrentes[120]);

foreach($contasCorrentes as $chave => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem("$chave => $titular, Saldo: $saldo");
}