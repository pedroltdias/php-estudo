<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once 'vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();
$alunosRepository = $entityManager->getRepository(Aluno::class);

$alunos = $alunosRepository->findAll();

foreach ($alunos as $aluno) {
    $telefones = $aluno
        ->getTelefones()
        ->map(function (Telefone $telefone) {
            return $telefone->getNumero();
        })
        ->toArray();

    $cursos = $aluno->getCursos();

    echo "[{$aluno->getId()}]: {$aluno->getNome()}" . PHP_EOL;
    echo "Telefones: " . implode(', ', $telefones) . PHP_EOL;
    echo "Cursos:" . PHP_EOL;
    foreach ($cursos as $curso) {
        echo "\t[{$curso->getId()}], [{$curso->getNome()}]" . PHP_EOL;
    }
}
