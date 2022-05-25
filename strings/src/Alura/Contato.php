<?php

namespace App\Alura;

class Contato
{

    private $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function getUsuario() : string 
    {
        $posicaoArroba = strpos($this->email, "@"); //retorna posicao de um caracter

        if ($posicaoArroba === false) {
            return "Usuário Inválido!";
        }

        return substr($this->email, 0, $posicaoArroba);
    }


}

?>