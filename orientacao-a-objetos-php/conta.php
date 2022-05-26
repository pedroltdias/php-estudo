<?php

class Conta 
{
    private string $cpfTitular;      //é possível tipar ou não variaveis
    private string $nomeTitular;
    private float $saldo;

    public function sacar(float $valorASacar) : void
    {
        if ($valorASacar > $this->$saldo) {
            echo "Saldo indisponível!";
            return;
        }
        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar) : void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo!";
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino) : void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível!";
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function getSaldo() : float 
    {
        return $this->saldo;
    }

    public function getCpfTitular() : string
    {
        return $this->cpfTitular;
    }

    public function getNomeTitular() : string
    {
        return $this->nomeTitular;
    }

    public function setCpfTitular(string $cpfTitular) : void
    {
        $this->cpfTitular = $cpfTitular;
    }

    public function setNomeTitular(string $nomeTitular) :void
    {
        $this->nomeTitular = $nomeTitular;
    }
}