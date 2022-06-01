<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{CPF, Pessoa};

abstract class Funcionario extends Pessoa
{
    private $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($cpf, $nome);
        $this->salario = $salario;
    }

    public function getSalario() : float
    {
        return $this->salario;
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