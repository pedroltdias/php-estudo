<?php

namespace Alura\Doctrine\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @Entity (repositoryClass="Alura\Doctrine\Repository\AlunoRepository")
 */
class Aluno
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private int $id;
    /**
     * @Column(type="string")
     */
    private string $nome;
    /**
     * @OneToMany(targetEntity="Telefone", mappedBy="aluno", cascade={"remove", "persist"})
     */
    private $telefones;
    /**
     * @ManyToMany (targetEntity="Curso", mappedBy="alunos")
     */
    private $cursos;

    public function __construct()
    {
        $this->telefones = new ArrayCollection();
        $this->cursos = new ArrayCollection();
    }

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

    public function addTelefone(Telefone $telefone)
    {
        $this->telefones->add($telefone);
        $telefone->setAluno($this);
    }

    public function getTelefones(): Collection
    {
        return $this->telefones;
    }

    public function addCurso (Curso $curso)
    {
        if($this->cursos->contains($curso)) {
            return;
        }
        $this->cursos->add($curso);
        $curso->addAluno($this);
    }

    public function getCursos(): Collection
    {
        return $this->cursos;
    }
}
