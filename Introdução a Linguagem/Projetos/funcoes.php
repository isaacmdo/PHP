<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

function exibeMensagem(string $mensagem) //sub-rotina tipo do parametro especificado
{
    echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valorADepositar): array //funcao com retorno tipo especificado (array) e parametros especificados
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos"); //chamada de sub-rotina
    }
    return $conta;
}

function sacar(array $conta, float $valorASacar): array //funcao com retorno tipo especificado (array) e parametros especificados
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não tem saldo suficiente"); //chamada de sub-rotina
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500
);

$contasCorrentes['123.456.689-11'] = sacar(
    $contasCorrentes['123.456.689-11'],
    200
);

$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'],
    900
);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        "$cpf {$conta['titular']} {$conta['saldo']}" //$cpf . " " . $conta['titular'] . ' ' . $conta['saldo']
    );
}

?>