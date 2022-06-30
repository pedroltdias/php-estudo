<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class Persistencia implements InterfaceControladorRequisicao
{
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();
    }

    public function processaRequisicao(): void
    {
        $descricao = filter_input(
            INPUT_POST,
            'descricao',
            FILTER_SANITIZE_FULL_SPECIAL_CHARS
        );

        $curso = new Curso();
        $curso->setDescricao($descricao);

        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

        if (!is_null($id) && $id !== false) {
            $curso->setId($id);
            $this->entityManager->merge($curso);
            $_SESSION['mensagem'] = "Curso atualizado com sucesso!";
        } else {
            $this->entityManager->persist($curso);
            $_SESSION['mensagem'] = "Curso inserido com sucesso!";
        }
        $_SESSION['tipo_mensagem'] = 'success';

        $this->entityManager->flush();

        header('Location: /listar-cursos', true, 302);
    }
}
