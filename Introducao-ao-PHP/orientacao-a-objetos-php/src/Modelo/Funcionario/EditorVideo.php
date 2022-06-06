<?php

namespace Alura\Banco\Modelo\Funcionario;

class EditorVideo extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return 600;
    }

}