<?php


$idadeList = [21, 23, 19, 25, 30, 41, 18];

for ($i = 0; $i < 7; $i++) {
    echo $idadeList[$i] . PHP_EOL;
}

//count para saber o tamanho do array
for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}


$nomes = array("João","Maria","Pedro","Ana");

for($indice=0; $indice<count($nomes) ;$indice++){
    echo $nomes[$indice].PHP_EOL;
}


//array associoativos

$conta1 = [
    'titular'=> 'Vinicius',
    'saldo'=>1000
];

$conta2 = [
    'titular'=> 'Maria',
    'saldo'=>10000
];

$conta3 = [
    'titular'=> 'Alberto',
    'saldo'=>300
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;

}