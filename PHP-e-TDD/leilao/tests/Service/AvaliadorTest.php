<?php

namespace Alura\Leilao\Tests\Service;

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Service\Avaliador;
use PHPUnit\Framework\TestCase;

class AvaliadorTest extends TestCase
{
    public function testAvaliadorDeveEncontrarOMaiorValorDeLancesEmOrdemCrescente()
    {
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
        self::assertEquals(2500, $maiorValor); //verifica se dois valores são iguais
    }

    public function testAvaliadorDeveEncontrarOMaiorValorDeLancesEmOrdemDecrescente()
    {
        // A inicialização do cenário (Arrange ou Given)
        $leilao = new Leilao('Fiat 147 0km');
        $lucas = new Usuario('Lucas');
        $joao = new Usuario('Joao');

        $leilao->recebeLance(new Lance($lucas, 2500));
        $leilao->recebeLance(new Lance($joao, 2000));

        $leiloeiro = new Avaliador();

        // A execução da regra de negócio (Act ou When)
        $leiloeiro->avalia($leilao);

        $maiorValor = $leiloeiro->getMaiorValor();

        // A verificação do resultado (Assert ou Then)
        self::assertEquals(2500, $maiorValor); //verifica se dois valores são iguais
    }
}