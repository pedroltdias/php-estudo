<?php

$arquivo = fopen('lista-cursos.txt', 'r');

$tamanhoDoArquivo = filesize('lista-cursos.txt');
$cursos = fread($arquivo, $tamanhoDoArquivo);

//Limite de leitura de um arquivo em php é 128mb
echo $cursos;

fclose($arquivo);