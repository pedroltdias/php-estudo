<?php

use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$repository = new PdoStudentRepository($connection);

/** @var \Alura\Pdo\Domain\Model\Student[] $studentList */
$studentList = $repository->studentsWithPhones();

var_dump($studentList);
