<?php

function exibeMensagemLancamento($ano) {
    if ($ano > 2022) {
        echo "O filme é Lançamento\n";
    } elseif ($ano > 2020 && $ano <= 2022) {
        echo "O filme ainda é novo\n";
    } else {
        echo "O filme não é Lançamento\n";
    }
}

function incluidoNoPlano($planoPrime, $anoLancamento) {
    return $planoPrime || $anoLancamento < 2020;
}

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc ; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

incluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: ".$nomeFilme."\n";
echo "Nota do filme: ".$notaFilme."\n";
echo "Ano de Lançamento:".$anoLancamento."\n";

exibeMensagemLancamento($anoLancamento);

$genero = match ($nomeFilme) {
    "Top Gun" => "Ação",
    "Thor: Ragnarok" => "Heroi",
    "Se Beber Não Case" => "comedia",
    default => "Genero desconhecido",
};

echo "Genero do filme é: ".$genero."\n";

$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => "2021",
    "nota" => 8,
    "genero" => "heroi",
];

echo $filme["ano"];