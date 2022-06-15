<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once 'vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$id = $argv[1];
$novoNome = $argv[2];

$aluno = $entityManager->find(Aluno::class, $id);
$aluno->setNome($novoNome);

$entityManager->flush();
