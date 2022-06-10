<?php

require '../config.php';
include '../src/Artigo.php';
$artigo = new Artigo($mysql);       //essa variavel vem do config.php
$artigos = $artigo->exibirTodos();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Página administrativa</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <div id="container">
        <h1>Página Administrativa</h1>
        <?php foreach ($artigos as $artigo) : ?>
            <div>
                <div id="artigo-admin">
                    <p><?php echo $artigo['titulo'] ?></p>
                    <nav>
                        <a class="botao" href="admin/editar-artigo.html?id=<?php echo $artigo['id']; ?>">Editar</a>
                        <a class="botao" href="admin/excluir-artigo.html?id=<?php echo $artigo['id']; ?>">Excluir</a>
                    </nav>
                </div>
            </div>
        <?php endforeach; ?>
        <a class="botao botao-block" href="adicionar-artigo.php">Adicionar Artigo</a>
    </div>
</body>

</html>