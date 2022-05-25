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

//unpacking == spread, a unica diferença é o contexto, mas o funcionamento é o mesmo

$alunos = [...$antigosAlunos, 'Pedro', ...$novosAlunos, 'Lucas']; //unpacking operator

array_push($alunos, 'Paulo', 'Andre'); //adicionar nomes ao final do array
$alunos[] = 'Dias'; //adiciona nome ao final do array

array_unshift($alunos, 'Joelma', 'Nathalia'); //adiciona nome no começo do array

array_shift($alunos); //remove e retorna primeiro nome do array

array_pop($alunos); //remove e retorna ultimo elemento do array

var_dump($alunos);