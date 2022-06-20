<?php

namespace Alura\Doctrine\Entity;

/**
 * @Entity
 */
class Telefone
{
    /**
     * @Id
     * @GeneratedValue
     * @Column (type="integer")
     */
    private ?int $id;
    /**
     * @Column (type="string")
     */
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