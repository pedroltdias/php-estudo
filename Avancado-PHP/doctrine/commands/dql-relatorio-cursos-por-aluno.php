<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Helper\EntityManagerFactory;
use Doctrine\DBAL\Logging\DebugStack;

require_once 'vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$classeAluno = Aluno::class;
$dql = "SELECT aluno, telefones, cursos from $classeAluno aluno JOIN aluno.telefones telefones JOIN aluno.cursos cursos";
$query = $entityManager->createQuery($dql);
$alunos = $query->getResult();

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
        echo "\t[{$curso->getId()}] - [{$curso->getNome()}]" . PHP_EOL;
    }
    echo PHP_EOL;
}
