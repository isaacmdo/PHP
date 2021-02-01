<?php

$idade = 21;

echo "Você só pode entrar se tiver mais do que 18 anos." . PHP_EOL;

if ($idade > 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
}

if ($idade == 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
}

if ($idade == 18 || $idade > 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
}

if ($idade == 18 or $idade > 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
}

if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
}

$nome = 'Vinicius';
$numeroDePessoas = 1;

if ($idade >= 18 and $nome == 'Vinicius') {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
}

if ($idade >= 18 && $nome == 'Vinicius') {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
} else if ($idade >= 16 && numeroDePessoas > 1) {
    echo "Você tem $idade anos e está acompanhado(a), então pode entrar.";
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
}


echo PHP_EOL;
echo "Adeus!";