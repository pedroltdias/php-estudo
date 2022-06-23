<?php

require __DIR__ . '/../vendor/autoload.php';

use Alura\Cursos\Controller\ListarCursos;

switch ($_SERVER['PATH_INFO']) {
    case '/listar-cursos':
        $controlador = new ListarCursos();
        $controlador->processaRequisicao();
        break;
    
    case '/formulario-novo-curso':
        require 'formulario-novo-curso.php';
        break;
    default:
        echo "ERROR 404";
        break;
}