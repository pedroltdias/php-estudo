<?php 

$lista1 = [1, 2, 3, 4, 5];

$lista2 = array(1, 2, 3, 4, 5);

list($listaIndice0, $listaIndice1, $listaIndice2) = $lista1;

echo "$lista1[0]" . PHP_EOL;
echo "$lista2[0]" . PHP_EOL;

echo $listaIndice0 . PHP_EOL;
echo $listaIndice1 . PHP_EOL;
echo $listaIndice2 . PHP_EOL;