<?php
//fgets(STDIN) é uma função do php que aguarda uma resposta no terminal
echo "Digite um numero: \n";
$numero = fgets(STDIN);
echo "O número é: $numero\n";