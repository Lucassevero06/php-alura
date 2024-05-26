<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular}; //namespaces agrupados
use Alura\Banco\Modelo\{CPF, Endereco}; //namespaces agrupados

require_once "autoload.php";

$conta = New ContaPoupanca(
            new Titular(
            new CPF('123.456.789-10'),
            'Lucas Gabriel',
            new Endereco('pvh', 'esp. comunidade', 'caula', '8101')));

$conta->deposita(500);
$conta->saca(100);
echo $conta->recuperaSaldo();