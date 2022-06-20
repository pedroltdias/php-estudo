<?php

namespace Alura\Doctrine\Entity;

class Curso
{
    private $id;
    private $nome;

    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }
}