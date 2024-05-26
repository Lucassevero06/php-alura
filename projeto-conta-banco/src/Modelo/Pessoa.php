<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa
{
    protected string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    protected function validaNomeTitular(string $nomeTitular): void
    {
        if (strlen($nomeTitular) < 3) {
            echo "Nome precisa ter pelo menos 3 caracteres";
            exit();
        }
    }
}