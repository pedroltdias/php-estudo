<?php

class Artigo
{

    private $mysql;

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;  
    }

    public function exibirTodos(): array
    {

        $resultado = $this->mysql->query('SELECT id, conteudo, titulo FROM artigos');

        $artigos = $resultado->fetch_all(MYSQLI_ASSOC);

        return $artigos;
    }
}
