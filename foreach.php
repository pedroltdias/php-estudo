<?php

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

$contasCorrentes[122] = [
    'titular' => 'Teixeira',
    'saldo' => 3000
];

$contasCorrentes[] = [
    'titular' => 'Paulo',
    'saldo' => 100
];

foreach($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
}

echo "===" . PHP_EOL;

foreach($contasCorrentes as $chave => $conta) {
    echo $chave . " => " . $conta['titular'] . PHP_EOL;
}