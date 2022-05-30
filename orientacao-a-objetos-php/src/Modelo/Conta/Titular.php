<?php

namespace Modelo\Conta;

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($cpf, $nome);
        $this->endereco = $endereco;
    }

    public function getCpf() : string 
    {
        return $this->cpf->getNumero();
    }

    public function getNome() : string 
    {
        return $this->nome;
    }

    public function getEndereco() : Endereco
    {
        return $this->endereco;
    }
}