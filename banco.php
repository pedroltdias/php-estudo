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

echo "<ul>";

foreach($contasCorrentes as $chave => $conta) {

    exibeConta($chave, $conta);
}

echo "</ul>";