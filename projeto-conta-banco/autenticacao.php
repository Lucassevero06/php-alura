<?php

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente};

require_once 'autoload.php';

 $autenticador = new Autenticador();
 $umDiretor = new Titular(
     new CPF('123.456.789-10'),
     'Marcos',
     new Endereco('', '', '', ''),

 );

 $autenticador->tentaLogin($umDiretor, 'abcd');