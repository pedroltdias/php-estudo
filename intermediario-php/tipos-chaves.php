<?php 

$array = [
    1       => 'a', //V
    '1'     => 'b', //V 
    1.5     => 'c', //F
    true    => 'd'  //F
];

//Usar apenas int e string como chaves
foreach ($array as $item) {
    echo $item . PHP_EOL;
}
