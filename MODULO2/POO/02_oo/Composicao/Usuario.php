<?php

require_once 'Cpf.php';

class Usuario
{
    private string $nome;
    private Cpf $cpf;
    private int $idade;
    private string $username;
    private string $senha;

    public function __construct(string $nome, Cpf $cpf, string $username, string $senha) 
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->username = $username;
        $this->senha = $senha;
    }

    public function getNome(): string 
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf->getCfp();
    }
}