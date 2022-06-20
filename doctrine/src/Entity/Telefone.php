<?php

namespace Alura\Doctrine\Entity;

class Telefone
{
    private ?int $id;
    private string $numero;

    public function getId(): int
    {
        return $this->id;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): void
    {
        $this->numero = $numero;
    }
}