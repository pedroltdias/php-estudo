<?php

function exibeMensagem(string $mensagem){
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valorASacar) : array {
    if ( $valorASacar > $conta['saldo']){
        exibeMensagem("Você não pode sacar um valor maior do que seu saldo!");
    } else {
        $conta['saldo'] -= 500;
    }
    return $conta;
}

function depositar(array $conta, float $valorADepositar) : array {
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Você precisa depositar valores maiores que zero!");
    }
    return $conta;
}

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

//$contasCorrentes['120']['saldo'] -= 500;  

$contasCorrentes['120'] = sacar($contasCorrentes['120'], 500);

$contasCorrentes['121'] = depositar($contasCorrentes['121'], 1000);

foreach($contasCorrentes as $chave => $conta) {
    exibeMensagem($chave . " => " . $conta['titular'] . ", Saldo: " . $conta['saldo']);
}