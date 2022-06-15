<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once 'vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$id = $argv[1];
$aluno = $entityManager->find(Aluno::class, $id);

if (is_null($aluno)) {
    echo "Aluno inexistente";
}

$entityManager->remove($aluno);
$entityManager->flush();
