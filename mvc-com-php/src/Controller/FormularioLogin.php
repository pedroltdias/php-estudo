<?php

namespace Alura\Cursos\Controller;

class FormularioLogin extends ControllerComHtml implements InterfaceControladorRequisicao
{
    public function processaRequisicao(): void
    {
        $this->renderizaHtml('login/formulario.php', [
            'titulo' => 'Login'
        ]);
    }
}
