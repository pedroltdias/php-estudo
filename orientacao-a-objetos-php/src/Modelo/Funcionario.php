<?php

namespace Alura\Banco\Modelo;

class Funcionario extends Pessoa
{
    private string $cargo;
    private $salario;

    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario)
    {
        parent::__construct($cpf, $nome);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function getCargo() : string 
    {
        return $this->cargo;
    }

    public function getSalario() : float
    {
        return $this->salario;
    }

    public function calculaBonificacao() : float
    {
        return $this->salario * 0.1;
    }
}