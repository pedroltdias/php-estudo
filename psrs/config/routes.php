<?php

use Alura\Cursos\Controller\Exclusao;
use Alura\Cursos\Controller\FormularioInsercao;

return [
    '/novo-curso' => FormularioInsercao::class,
    '/excluir-curso' => Exclusao::class,
];
