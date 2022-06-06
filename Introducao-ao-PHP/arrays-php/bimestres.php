<?php

$notasBimestre1 = [
    'Maria'     => 9,
    'Ana'       => 10,
    'João'      => 8,
    'Vinicius'  => 6,
    'Roberto'   => 7,
];

$notasBimestre2 = [
    'Maria'     => 10,
    'Ana'       => 9,
    'João'      => 8,
    'Vinicius'  => 6,
    'Roberto'   => 7,
];

//var_dump(array_diff($notasBimestre1, $notasBimestre2)); //chaves ignoradas
//var_dump(array_diff_key($notasBimestre1, $notasBimestre2)); //valores ignorados
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2)); //leva em conta chaves e valores
