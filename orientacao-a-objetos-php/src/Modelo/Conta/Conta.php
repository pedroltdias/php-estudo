<?php

namespace Alura\Banco\Modelo\Conta;

class Conta 
{
    private Titular $titular;
    private float $saldo;
    private static int $numeroDeContas = 0;
    /**
     * @var int $tipo 1 == Conta Corrente; 2 == Poupanca
     */
    private int $tipo;

    public function __construct(Titular $titular, int $tipo)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        $this->tipo = $tipo;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar) : void
    {
        if ($this->tipo === 1) {
            $tarifaSaque = $valorASacar * 0.05;
        } else {
            $tarifaSaque = $valorASacar * 0.03;
        }
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível!";
            return;
        }
        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar) : void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo!";
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino) : void
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

    public static function getNumeroDeContas() : int  
    {
        return self::$numeroDeContas;
    }

    public function getCpfTitular() : string 
    {
        return $this->titular->getCpf();
    }

    public function getNomeTitular() : string 
    {
        return $this->titular->getNome();
    }
}