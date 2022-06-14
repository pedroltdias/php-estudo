<?php

namespace Alura\Pdo\Infrastructure\Repository;

use Alura\Pdo\Domain\Model\Student as ModelStudent;
use Alura\Pdo\Domain\Repository\Student;
use Alura\Pdo\Domain\Repository\StudentRepository;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use DateTimeInterface;

class PdoStudentRepository implements StudentRepository
{
    private \PDO $connection;

    public function __construct() 
    {
        $this->connection = ConnectionCreator::createConnection();
    }

    public function allStudents(): array
    {
        return;
    }

    public function studentsBirthAt(DateTimeInterface $birthDate): array
    {
        
    }

    public function save(Student $student): bool
    {
       
    }

    public function insert (Student $student): bool
    {
       
    }

    public function update(Student $student): bool
    {
       
    }

    public function remove(Student $student): bool
    {
        $stmt = $this->connection->prepare('DELETE FROM students WHERE id = ?;');
        $stmt->bindValue(1, $student->id(), PDO::PARAM_INT);

        return $stmt->execute();
    }

}