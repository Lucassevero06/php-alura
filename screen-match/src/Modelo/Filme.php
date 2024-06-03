<?php

namespace Modelo;

class Filme
{
    protected string $nome = "padrao";
    protected int $anoLancamento = 2024;
    protected string $genero = "padrao";
    protected array $notas = [];

    public function avalia(float $nota): void
    {
        $this->notas[] = $nota;
    }

    public function media(): float
    {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }

    public function anoLancamento(): int
    {
        return $this->anoLancamento;
    }

    public function defineAnoLancamento(int $anoLancamento): void
    {
        $this->anoLancamento = $anoLancamento;
    }

    public function nome(): int
    {
        return $this->nome;
    }

    public function defineNome(int $nome): void
    {
        $this->nome = $nome;
    }

    public function genero(): int
    {
        return $this->genero;
    }

    public function defineGenero(int $genero): void
    {
        $this->genero = $genero;
    }

}