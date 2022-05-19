<?php

require 'funcoes.php';

$contasCorrentes = [
    120 => [
        'titular' => 'Pedro',
        'saldo' => 1000
    ], 
    121 => [
        'titular' => 'Lucas',
        'saldo' => 2000
    ], 
    123 => [
        'titular' => 'Dias',
        'saldo' => 4000
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach ($contasCorrentes as $cpf=>$conta){?>
        <dt>
            <h3>Titular: <?= $conta['titular'];?> - CPF: <?=$cpf;?></h3>
        </dt>
        <dd>Saldo: <?= $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>
</body>
</html>