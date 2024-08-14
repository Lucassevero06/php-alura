<?php

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Service\Avaliador;

require 'vendor/autoload.php';

// A inicialização do cenário (Arrange ou Given)
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

// A execução da regra de negócio (Act ou When)
$leiloeiro->avalia($leilao);

$maiorValor = $leiloeiro->getMaiorValor();

// A verificação do resultado (Assert ou Then)
$valorEsperado = 2500;

if ($valorEsperado == $maiorValor) {
    echo "TESTE OK" . PHP_EOL;
} else {
    echo "TESTE FALHOU" . PHP_EOL;
}