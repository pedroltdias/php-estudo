<?php

$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'três'
];

// var_dump($array);

foreach ($array as $numeral => $nomeNumero) {
    echo "$numeral => $nomeNumero" . PHP_EOL;
}

echo count($array);