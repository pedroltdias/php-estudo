<?php

class Titular 
{
    private string $cpf;
    private string $nome;

    public function __construct(string $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function getCpf() : string 
    {
        return $this->cpf;
    }

    public function getNome() : string 
    {
        return $this->nome;
    }
}