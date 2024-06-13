<?php

namespace Calculos;


class ConversorNotaEstrela
{
    public function converte(Avaliavel $avaliavel): float
    {
        $nota = $avaliavel->media();

        // realiza conversão

        return round($nota) / 2;
    }
}