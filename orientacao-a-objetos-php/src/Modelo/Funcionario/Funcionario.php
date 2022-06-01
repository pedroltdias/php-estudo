<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{CPF, Pessoa};

abstract class Funcionario extends Pessoa
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

    public function recebeAumento(float $valorAumento) : void
    {
        if ($valorAumento < 0) {
            echo "Aumento deve ser positivo!";
            return;
        }

        $this->salario += $valorAumento;
    } 
}