<?php

namespace Alura\Banco\Modelo;

class Pessoa 
{
    private string $nome;
    private CPF $cpf;

    public function __construct(CPF $cpf, string $nome)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome() : string
    {
        return $this->nome;
    }

    public function getCpf() : string
    {
        return $this->cpf->getNumero();
    }

    protected function validaNomeTitular(string $nomeTitular) : void
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}