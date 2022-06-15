<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once 'vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$alunoRepository = $entityManager->getRepository(Aluno::class);

$alunoList = $alunoRepository->findAll();

foreach ($alunoList as $aluno) {
    echo "[{$aluno->getId()}]: {$aluno->getNome()}" . PHP_EOL;
}

$paulo = $alunoRepository->find(3);
echo $paulo->getNome();

$mauricio = $alunoRepository->findBy([
    'nome' => 'Mauricio Dias'
]);
var_dump($mauricio);

$madalena = $alunoRepository->findOneBy([
    'nome' => 'Madalena Dias'
]);
var_dump($madalena);
