<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Diretor, Funcionario, Gerente};

$umFuncionario = new Desenvolvedor(
    'Lucas',
    new CPF('123.456.789-10'),
    'Desenvolvedor',
    1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Emili',
    new CPF('123.456.789-10'),
    'Gerente',
    3000
);

$umDiretor = new Diretor(
    'Gabriel',
    new CPF('123.456.789-10'),
    'Diretor',
    5000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);

echo $controlador->recuperaTotalBonificacoes();