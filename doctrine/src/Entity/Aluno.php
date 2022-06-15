<?php

namespace Alura\Doctrine\Entity;

class Aluno
{
    private int $id;
    private string $nome;

    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }
}