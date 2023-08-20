<?php 

namespace Exercicio;

abstract class Pessoa 
{
  protected string $nome;
  protected int $idade;
  protected string $genero;

public function __construct(string $nome, int $idade, string $genero) {
  $this->nome = $nome;
  $this->setIdade($idade);
  $this->setGenero($genero);
}

protected function setNome(string $nome) : void 
{
  $this->nome =$nome;
}

public function getNome(): string 
{
  return $this->nome;
}

protected function setIdade(int $idade) : void 
{
  if(($idade < 0 ) || ($idade > 100)){
    die('Idade inválida');    
  }

  $this->idade = $idade;
}

public function getIdade(): int 
{
  return $this->idade;
}

protected function setGenero (string $genero) : void
{
  $options = ['Masculino', 'Feminino'];
  if(!in_array($genero,$options)){
    die('Genero inválido.');
  }
  $this->genero = $genero;
}

public function getGenero() : string 
{
  return $this->genero;
}

}