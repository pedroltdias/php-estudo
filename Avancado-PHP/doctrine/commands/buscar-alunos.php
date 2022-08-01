<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once 'vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$alunoRepository = $entityManager->getRepository(Aluno::class);

$alunoList = $alunoRepository->findAll();

foreach ($alunoList as $aluno) {
    //busca-se telefones do aluno, utiliza-se o metodo map do doctrine, o qual recebe, pelo retorno, o numero de telefone, em seguida passa-se o metodo toArray, o qual junta todos os telefones devolvidos em um array
    $telefones = $aluno
        ->getTelefones()
        ->map(function (Telefone $telefone){
            return $telefone->getNumero();
        })
        ->toArray();
    echo "[{$aluno->getId()}]: {$aluno->getNome()}" . PHP_EOL;
    echo "Telefones: " . implode(', ', $telefones). PHP_EOL;
}
