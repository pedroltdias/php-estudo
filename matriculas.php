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

$alunos = array_merge($antigosAlunos, $novosAlunos); //Não preserva as chaves antigas

var_dump($alunos);