<?php

namespace Alura\Cursos\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Alura\Cursos\Entity\Curso;

class Exclusao implements RequestHandlerInterface
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $queryString = $request->getQueryParams();
        $idEntidade = $queryString['id'];
        $entidade = $this->entityManager->getReference(Curso::class, $idEntidade);
        $this->entityManager->remove($entidade);
        $this->entityManager->flush();

        return new Response(302, ['Location' => '/novo-curso']);
    }

}
