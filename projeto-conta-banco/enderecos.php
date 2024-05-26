<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('cidade', 'bairro', 'rua', 123);
$outroEndereco = new Endereco('cidade2', 'bairro2', 'rua2', 1234);

echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;