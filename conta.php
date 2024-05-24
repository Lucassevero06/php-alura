<?php

$saldo = 1_000;
$titular = "Lucas";

echo "-------------------\n";
echo "O titular é: $titular\n";
echo "O saldo é: $saldo\n";
echo "-------------------\n";

do {
    echo "1. Consultar Saldo Atual\n";
    echo "2. Sacar Valor\n";
    echo "3. Depositar Valor\n";
    echo "4. Sair\n";

    $opcao = (int) fgets(STDIN);

    switch ($opcao) {
        case 1:
            echo "-------------------\n";
            echo "O titular é: $titular\n";
            echo "O saldo é: $saldo\n";
            echo "-------------------\n";
            break;

        case 2:
            echo "Qual valor deseja sacar?\n";
            $valorASacar = (float) fgets(STDIN);
            if ($valorASacar > $saldo ) {
                echo "Saldo insuficiente\n";
            } else {
                $saldo -= $valorASacar;
            }
            break;

        case 3:
            echo "Qual valor deseja depositar?\n";
            $valorADepositar = (float) fgets(STDIN);
            $saldo += $valorADepositar;
            break;

        case 4:
            echo "Bye\n";
            break;

        default:
            echo "Opção Inválida\n";
            break;
    }
} while ($opcao != 4);