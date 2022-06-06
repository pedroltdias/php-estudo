<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

use Alura\Banco\Modelo\Autenticavel;

class Titular extends Pessoa implements Autenticavel
{
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($cpf, $nome);
        $this->endereco = $endereco;
    }

    public function getEndereco() : Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha) : bool
    {
        return $senha === 'abcd';
    }
}