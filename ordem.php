<?php

$notas = [
    10,
    8,
    9,
    7
];

$notasOrdenadas = $notas;
sort($notasOrdenadas); //Modifica a variavel!

echo "Desordenadas: ";
var_dump($notas);

echo "Ordenadas: ";
var_dump($notasOrdenadas);