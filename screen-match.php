<?php

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun";
$anoLancamento = $argv[1] ?? 2022;

$somaDeNotas = 9;
$somaDeNotas += 6;
$somaDeNotas += 8;
$somaDeNotas += 7.5;
$somaDeNotas += 5;

$notaFilme = $somaDeNotas / 5;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do filme: ".$nomeFilme."\n";
echo "Nota do filme: ".$notaFilme."\n";
echo "Ano de Lançamento:".$anoLancamento."\n";

if ($anoLancamento > 2022) {
    echo "O filme é Lançamento";
} elseif ($anoLancamento > 2020 && $anoLancamento <= 2022) {
    echo "O filme ainda é novo";
} else {
    echo "O filme não é Lançamento";
}
