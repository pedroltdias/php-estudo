<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';

$primeiraConta = new Conta(new Titular('123.456.789-10', 'Pedro Dias'));
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->getNomeTitular() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL;
echo $primeiraConta->getSaldo() . PHP_EOL;

$segundaConta = new Conta(new Titular('987.654.321-20', 'Paulo Dias'));

var_dump($segundaConta);

$outra = new Conta(new Titular('132', 'Abc'));
unset($segundaConta);
echo Conta::getNumeroDeContas();