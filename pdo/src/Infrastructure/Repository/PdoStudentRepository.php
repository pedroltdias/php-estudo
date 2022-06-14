<?php

namespace Alura\Pdo\Infrastructure\Repository;

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

    public function remove(Student $student): bool
    {
        
    }

}