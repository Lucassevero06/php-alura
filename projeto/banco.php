<?php

require 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->deposita(500);
$primeiraConta->saca(300);
$primeiraConta->defineCpfTitular('12345678910');
$primeiraConta->defineNomeTitular('Lucas Gabriel');

echo $primeiraConta->recuperaCpfTitular();
echo $primeiraConta->recuperaNomeTitular();
echo $primeiraConta->recuperaSaldo();