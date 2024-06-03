<?php

use Modelo\Filme;

require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem-vindo(a) ao ScreenMatch";

$filme = new Filme();
$filme->defineAnoLancamento(2021);
//$filme->nome = 'Thor Ragnarok';
//$filme->anoLancamento = 2021;
//$filme->genero = "Super-Heroi";

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

var_dump($filme);

echo $filme->media() . "/n";
