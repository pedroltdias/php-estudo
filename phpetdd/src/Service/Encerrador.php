<?php

namespace Alura\Leilao\Service;

use Alura\Leilao\Dao\Leilao as LeilaoDao;

class Encerrador
{
    private LeilaoDao $dao;
    private EnviadorEmail $enviadorEmail;

    public function __construct(LeilaoDao $dao, EnviadorEmail $enviadorEmail)
    {
        $this->dao = $dao;
        $this->enviadorEmail = $enviadorEmail;
    }

    public function encerra()
    {
        $leiloes = $this->dao->recuperarNaoFinalizados();

        foreach ($leiloes as $leilao) {
            if ($leilao->temMaisDeUmaSemana()) {
                $leilao->finaliza();
                $this->dao->atualiza($leilao);
                $this->enviadorEmail->notificarTerminoLeilao($leilao);
            }
        }
    }
}
