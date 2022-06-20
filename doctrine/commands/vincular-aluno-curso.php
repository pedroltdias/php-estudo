<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Curso;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once 'vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$idAluno = $argv[1];
$idCurso = $argv[2];

/** @var Curso $curso */
$curso = $entityManager->find(Curso::class, $idCurso);
/** @var Aluno $aluno */
$aluno = $entityManager->find(Aluno::class, $idAluno);

$curso->addAluno($aluno);

$entityManager->flush();
