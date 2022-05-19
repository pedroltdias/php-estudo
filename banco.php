<?php

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

function sacar($conta, $valorASacar){
    if ( $valorASacar > $conta['saldo']){
        exibeMensagem("Você não pode sacar um valor maior do que seu saldo!");
    } else {
        $conta['saldo'] -= 500;
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

$contasCorrentes['120'] = sacar($contasCorrentes['120'], 1100);

foreach($contasCorrentes as $chave => $conta) {
    exibeMensagem($chave . " => " . $conta['titular'] . ", Saldo: " . $conta['saldo']);
}