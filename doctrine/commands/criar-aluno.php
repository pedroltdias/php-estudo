<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once 'vendor/autoload.php';

$aluno = new Aluno();
$aluno->setNome('Pedroca Dias');

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$entityManager->persist($aluno);
$aluno->setNome('Pedro Dias');

$entityManager->flush();
