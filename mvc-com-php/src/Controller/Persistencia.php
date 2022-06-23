<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class Persistencia implements InterfaceControladorRequisicao
{
    private $entityManager;

    public function __construct()
    {
        $this->entityManger = (new EntityManagerCreator())->getEntityManager();
    }

    public function processaRequisicao(): void
    {
        $curso = new Curso();
        $curso->setDescricao($_POST['descricao']);
        $this->entityManager->persist($curso);
        $this->entityManager->flush();
    }
}
