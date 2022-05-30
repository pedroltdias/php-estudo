<?php

namespace Alura\Banco\Modelo;

class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        parent::__construct($cpf, $nome);
        $this->cargo = $cargo;
    }

    public function getCargo() : string 
    {
        return $this->cargo;
    }
}