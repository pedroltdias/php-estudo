<?php

switch ($_SERVER['PATH_INFO']) {
    case '/listar-cursos':
        require 'listar-cursos.php';
        break;
    
    case '/formulario-novo-curso':
        require 'formulario-novo-curso.php';
        break;
    default:
        echo "ERROR 404";
        break;
}