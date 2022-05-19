<?php

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
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

$contasCorrentes['120']['saldo'] -= 500;  

foreach($contasCorrentes as $chave => $conta) {
    exibeMensagem($chave . " => " . $conta['titular'] . ", Saldo: " . $conta['saldo']);
}