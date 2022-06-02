<?php

$teclado = fopen('php://stdin', 'r');

$novoCurso = trim(fgets($teclado));

file_put_contents('cursos-php.txt', "\n$novoCurso", FILE_APPEND);
