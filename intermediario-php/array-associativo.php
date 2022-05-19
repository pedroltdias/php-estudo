<?php

$conta1 = [
    'titular' => 'Pedro',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Lucas',
    'saldo' => 2000
];

$conta3 = [
    'titular' => 'Dias',
    'saldo' => 3000
];

$contasCorrentes = [$conta1, $conta2, $conta3];

/*
echo $conta1['titular'] . PHP_EOL;
echo $contasCorrentes[1]['titular'];
*/

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;    
}