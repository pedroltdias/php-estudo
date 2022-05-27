<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';
require_once 'src/Endereco.php';
require_once 'src/Pessoa.php';

$endereco = new Endereco('Brasilia', 'um bairro', 'minha rua', '27');
$pedro = new Titular(new CPF('123.456.789-10'), 'Pedro Dias', $endereco);
$primeiraConta = new Conta($pedro);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->getNomeTitular() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL;
echo $primeiraConta->getSaldo() . PHP_EOL;

$paulo = new Titular(new CPF('987.654.321-20'), 'Paulo Dias', $endereco);
$segundaConta = new Conta($paulo);

var_dump($segundaConta);

// $outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Outra'));
unset($segundaConta);
echo Conta::getNumeroDeContas();