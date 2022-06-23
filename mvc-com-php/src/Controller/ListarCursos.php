<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class ListarCursos
{
    public function processaRequisicao()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $repositorioDeCursos = $entityManager->getRepository(Curso::class);
        $cursos = $repositorioDeCursos->findAll();
    }
}
