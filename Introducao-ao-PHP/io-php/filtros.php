<?php

require 'MeuFiltro.php';

$arquivoCursos = fopen('lista-cursos.txt', 'r');

stream_filter_register('alura.partes', MeuFiltro::class);
stream_filter_append($arquivoCursos, 'alura.partes');

$conteudo = fread($arquivoCursos, filesize('lista-cursos.txt'));