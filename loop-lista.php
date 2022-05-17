<?php 

$lista = [1, 2, 3, 4, 5];

/*
for($i = 0; $i < 5; $i++){
    echo "$lista[$i]" . PHP_EOL;
}
*/

// count == length
for($i = 0; $i < count($lista); $i++){
    echo "$lista[$i]" . PHP_EOL;
}