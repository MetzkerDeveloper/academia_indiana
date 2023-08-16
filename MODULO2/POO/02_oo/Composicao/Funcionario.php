<?php

require_once 'Cpf.php';

class Funcionario 
{
    private string $nome;
    private Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf) 
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getCpf(): string
    {
        return $this->cpf->getCfp();
    }
}