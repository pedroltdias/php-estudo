<?php 

$lista = [1, 2, 3, 4, 5];

/*
for($i = 0; $i < 5; $i++){
    echo "$lista[$i]" . PHP_EOL;
}
*/


//coloca no final da lista
$lista[count($lista)] = 6;

//coloca no proximo indice disponivel
$lista[] = 7;


// count == length
for($i = 0; $i < count($lista); $i++){
    echo "$lista[$i]" . PHP_EOL;
}