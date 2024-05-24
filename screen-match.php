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
    echo "O filme é Lançamento\n";
} elseif ($anoLancamento > 2020 && $anoLancamento <= 2022) {
    echo "O filme ainda é novo\n";
} else {
    echo "O filme não é Lançamento\n";
}

$genero = match ($nomeFilme) {
    "Top Gun" => "Ação",
    "Thor: Ragnarok" => "Heroi",
    "Se Beber Não Case" => "comedia",
    default => "Genero desconhecido",
};

echo "Genero do filme é: ".$genero."\n";