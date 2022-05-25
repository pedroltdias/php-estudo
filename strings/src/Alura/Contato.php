<?php

namespace App\Alura;

class Contato
{

    private $email;
    private $endereco;
    private $cep;
    private $telefone;

    public function __construct(string $email, string $endereco, string $cep, string $telefone)
    {
        $this->endereco = $endereco;
        $this->cep = $cep;

        if ($this->validaEmail($email) !== false) {
            $this->setEmail($email);
        } else {
            $this->setEmail("Email inválido.");
        }

        if ($this->validaTelefone($telefone)) {
            $this->setTelefone($telefone);
        } else {
            $this->setTelefone("Telefone inválido!");
        }


        
    }

    private function setEmail(string $email) : void
    {
        $this->email = $email;
    }

    private function setTelefone (string $telefone) : void 
    {
        $this->telefone = $telefone;
    }

    public function getUsuario() : string 
    {
        $posicaoArroba = strpos($this->email, "@"); //retorna posicao de um caracter

        if ($posicaoArroba === false) {
            return "Usuário Inválido!";
        }

        return substr($this->email, 0, $posicaoArroba);
    }

    private function validaEmail (string $email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function getEnderecoCep() : string
    {
        $enderecoCep = [$this->endereco, $this->cep];
        return implode(" - ", $enderecoCep);
    }

    public function getTelefone() : string
    {
        return $this->telefone;
    }

    private function validaTelefone(string $telefone) : int 
    {
        return preg_match('/^[0-9]{4}-[0-9]{4}$/', $telefone, $encontrados);
    }


}

?>