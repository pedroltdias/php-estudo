<?php

namespace Alura\Cursos\Controller;

class ControllerComHtml
{
    public function renderizaHtml(string $caminhoTemplate, array $dados)
    {
        require __DIR__ . '/../../view/' . $caminhoTemplate;
    }
}