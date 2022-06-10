<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$statement = $pdo->query('SELECT * FROM students WHERE id = 1;');

$studentDataList = $statement->fetchAll(PDO::FETCH_ASSOC);
$studentList = [];

foreach ($studentDataList as $studentData) {
    $studentList = new Student(
        $studentData['id'], 
        $studentData['name'], 
        new \DateTimeImmutable($studentData['birth_date'])
    );
}

var_dump($studentList);
exit();

var_dump($statement->fetchColumn(3));   //retorna a coluna

while ($studentData = $statement->fetch(PDO::FETCH_ASSOC)) {
    $student = new Student(
        $studentData['id'],
        $studentData['name'],
        new \DateTimeImmutable($studentData['birth_date'])
    );

    echo $student->age() . PHP_EOL;
}
