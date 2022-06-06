<?php

#Continue -> continua a execução do loop
for($i = 0; $i <= 15; $i++){
    if ($i == 13) {
        continue;
    }

    echo "$i" . PHP_EOL;
}

#Break -> encerra a execução do loop
for($i = 0; $i <= 15; $i++){
    if ($i == 13) {
        break;
    }

    echo "$i" . PHP_EOL;
}