<?php 

$notasBimestre1 = [
    'Maria'     => 9,
    'Ana'       => 10,
    'João'      => 8,
    'Vinicius'  => 6,
    'Roberto'   => 7,
];

$notasBimestre2 = [
    'Ana'       => 9,
    'João'      => 8,
    'Roberto'   => 7,
];

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);

var_dump(array_keys($alunosFaltantes)); //exibe as chaves faltantes
var_dump(array_values($alunosFaltantes)); //notas dos alunos faltantes

$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($nomesAlunos, $notasAlunos)); //Combina os nomes e notas dos alunos faltantes -> para usar o combine, os dois arrays passados como parâmetro devem ter o mesmo tamanho

var_dump(array_flip($alunosFaltantes)); //inverte chaves e valores