<?php

$meusCursos = file('lista-cursos.txt');
$outrosCursos = file('cursos-php.txt');

$arquivoCsv = fopen('cursos.csv', 'w');

foreach ($meusCursos as $curso) {
    $linha = [$curso, 'Sim'];

    fwrite($arquivoCsv, implode(',', $linha));
}

foreach ($outrosCursos as $curso) {
    $linha = [$curso, 'Não'];

    fwrite($arquivoCsv, implode(',', $linha));
}

fclose($arquivoCsv);
