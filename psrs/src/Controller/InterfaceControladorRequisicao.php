<?php

namespace Alura\Cursos\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

interface InterfaceControladorRequisicao
{
    public function processaRequisicao(ServerRequestInterface $request): ResponseInterface;
}