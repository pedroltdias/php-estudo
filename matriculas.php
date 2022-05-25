<?php

$antigosAlunos = [
    'Maria',
    'Ana',
    'João',
    'Vinicius',
    'Roberto',
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Nickson',
];

// $alunos = array_merge($antigosAlunos, $novosAlunos); //Não preserva as chaves antigas

$alunos = [...$antigosAlunos, 'Pedro', ...$novosAlunos, 'Lucas']; //unpacking operator

//unpacking == spread, a unica diferença é o contexto, mas o funcionamento é o mesmo

var_dump($alunos);