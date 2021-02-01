<?php

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    12345678911 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    12325678912 => [
    'titular' => 'Alberto',
    'saldo' => 300
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['titular'] . PHP_EOL;
}

//cpf seria o indice do array
//a traducao do codigo seria "Para cada item do array &contasCorrentes que o indice &cpf e o valor $conta, faca isso"

/* se nao quisermos obter a informacao indece podemos descartar assim

foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
} */

/*Não precisamos conhecer as chaves de cada item para percorrer seus valores*/