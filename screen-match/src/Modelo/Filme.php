<?php

namespace Modelo;

class Filme
{
    protected string $nome;
    protected int $anoLancamento;
    protected string $genero;
    protected array $notas = [];

    public function __construct(string $nome, int $anoLancamento, string $genero)
    {
        
    }

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

    public function nome(): string
    {
        return $this->nome;
    }
}