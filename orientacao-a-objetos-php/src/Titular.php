<?php

class Titular 
{
    private CPF $cpf;
    private string $nome;

    public function __construct(CPF $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function getCpf() : string 
    {
        return $this->cpf->recuperaNumero();
    }

    public function getNome() : string 
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nomeTitular) : void
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}