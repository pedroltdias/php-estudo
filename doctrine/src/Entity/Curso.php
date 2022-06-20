<?php

namespace Alura\Doctrine\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 */
class Curso
{
    /**
     * @Id
     * @GeneratedValue
     * @Column (type="integer")
     */
    private $id;
    /**
     * @Column (type="string")
     */
    private $nome;
    /**
     * @ManyToMany (targetEntity="Aluno")
     */
    private $alunos;

    public function __construct() 
    {
        $this->alunos = new ArrayCollection();
    }

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

    public function addAluno(Aluno $aluno)
    {
        $this->alunos->add($aluno);
    }

    public function getAlunos()
    {
        return $this->alunos;
    }
}