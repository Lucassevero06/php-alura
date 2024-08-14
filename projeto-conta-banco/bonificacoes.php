<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Diretor, EditorVideo, Gerente};

$umFuncionario = new Desenvolvedor(
    'Lucas',
    new CPF('123.456.789-10'),
    1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Emili',
    new CPF('123.456.789-10'),
    3000
);

$umDiretor = new Diretor(
    'Gabriel',
    new CPF('123.456.789-10'),
    5000
);

$umEditor = new EditorVideo(
    'Leonardo',
    new CPF('123.456.789-10'),
    1500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotalBonificacoes();