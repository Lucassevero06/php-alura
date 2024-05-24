<?php

function exibeMensagemLancamento(int $ano): void {
    if ($ano > 2022) {
        echo "O filme é Lançamento\n";
    } elseif ($ano > 2020 && $ano <= 2022) {
        echo "O filme ainda é novo\n";
    } else {
        echo "O filme não é Lançamento\n";
    }
}

function incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool {
    return $planoPrime || $anoLancamento < 2020;
}