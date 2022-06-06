<?php 

$idade = 20;
$verdadeiro = true;

echo "Você so pode entrar se tiver mais que 18 anos..." . PHP_EOL;

// $idade == 18 -> igual
// $idade >= 18 -> maior ou igual
// $idade >  18 -> maior
// $idade  < 18 -> menor
// $idade <= 18 -> menor ou igual
// $idade != 18 -> diferente

// || == or
// && == and


if ($idade >= 18){
    echo "Você tem $idade anos. Pode entrar!" . PHP_EOL;
} else {
    echo "Tá de sacanagem maluco? Você só tem $idade... Obvio que você não pode entrar...";
}