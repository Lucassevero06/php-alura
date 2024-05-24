<?php

require __DIR__ . "/funcoes.php"; //chamando funções que estão em outro arquivo

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

$filme = criaFilme(
    nome: "Thor: Ragnarok",
    anoLancamento: 2021,
    nota: 8,
    genero: "herói"
);

echo $filme["ano"];

var_dump($notas);
sort($notas); //organiza o array
var_dump($notas);
$menorValorArray = min($notas); //retorna o menor valor do array
var_dump($menorValorArray);

var_dump($filme['nome']);
$posicaoDoisPontos = strpos($filme['nome'], ':');
var_dump($posicaoDoisPontos);

var_dump(substr($filme['nome'], 0, $posicaoDoisPontos));

$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson);