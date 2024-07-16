<?php

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Service\Avaliador;

require 'vendor/autoload.php';

$leilao = new Leilao('Fiat 147 0km');
$lucas = new Usuario('Lucas');
$joao = new Usuario('Joao');

$leilao->recebeLance(new Lance(
    $joao,
    2000
));

$leilao->recebeLance(new Lance(
    $lucas,
    2500
));

$leiloeiro = new Avaliador();
$leiloeiro->avalia($leilao);
echo $leiloeiro->getMaiorValor() . PHP_EOL;