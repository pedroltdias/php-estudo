<?php

namespace Alura\Cursos\Controller;

class Formulario implements InterfaceControladorRequisicao
{

    public function processaRequisicao(): void
    {
        $id = filter_input(
                INPUT_GET,
                'id',
                FILTER_VALIDATE_INT
        );

        if (is_null($id) || $id === false) {
            header('Location: /listar-cursos');
            return;
        }

    }
}