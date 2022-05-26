<?php

class Conta 
{
    public string $cpfTitular;      //é possível tipar ou não variaveis
    public string $nomeTitular;
    public float $saldo;

    public function sacar(float $valorASacar)
    {
        if ($valorASacar > $this->$saldo) {
            echo "Saldo indisponível!";
        } else {
            $this->saldo -= $valorASacar;
        }
    }
}