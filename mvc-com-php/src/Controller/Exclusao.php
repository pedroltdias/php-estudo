<?php

namespace Alura\Cursos\Controller;

class Exclusao implements InterfaceControladorRequisicao
{
    public function processaRequisicao(): void
    {
        $id = filter_input(
            INPUT_GET, 
            'id', 
            FILTER_VALIDATE_INT
        );

        if ($id === false) {
            header('Location: /listar-cursos');
        }
    }

}