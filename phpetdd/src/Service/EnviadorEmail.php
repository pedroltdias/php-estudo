<?php

namespace Alura\Leilao\Service;

use Alura\Leilao\Model\Leilao;

class EnviadorEmail
{
    public function notificarTerminoLeilao(Leilao $leilao)
    {
        $sucesso = mail(
            'diogoteixeira0602@gmail.com',
            'Leilão Finalizado',
            'O leilão para ' . $leilao->recuperarDescricao() . ' foi finalizado.'
        );

        if (!$sucesso) {
            throw new \DomainException('Erro ao enviar e-mail!');
        }
    }

}