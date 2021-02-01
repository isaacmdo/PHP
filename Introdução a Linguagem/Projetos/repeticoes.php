<?php

$contador = 1;

while ($contador <= 15) {
        echo "#$contador" . PHP_EOL;
        $contador = $contador + 1;
}

for ($contador = 1; $contador <= 15; $contador ++) {
    echo "#$contador" . PHP_EOL;
}

for ($contador = 1; $contador <= 15; $contador += 2) {
    echo "#$contador" . PHP_EOL;
}

for ($contador = 1; $contador <= 15; $contador ++) {
    if ($contador == 13) {
        continue;
    } else {
        echo "#$contador" . PHP_EOL;
    }
}

for ($contador = 1; $contador <= 15; $contador ++) {
    if ($contador == 13) {
        break;
    } 
    echo "#$contador" . PHP_EOL;
}