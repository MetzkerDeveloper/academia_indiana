<?php 
class Pessoa
{
  // atributos
  public string $nome;
  public string $corOlhos;
  public string $corCabelo;
  public string $corPele;
  public string $genero;
  public float $altura;
  public float $peso;
  public int $idade;
  public bool $usaAparelho;
  //Metodos
  public function setCorOlhos(string $corOlhos):void
  {
    $this->corOlhos = $corOlhos;
  }
  
  public function getCorOlhos():string
  {
    return $this->corOlhos;
  }
  
  public function setCorCabelo(string $corCabelo):void
  {
    $this->corCabelo = $corCabelo;
  }

  public function getCorCabelos():string
  {
    return $this->corCabelo;
  }
  
  public function setCorPele(string $corPele):void
  {
    $this->corPele = $corPele;
  }
  
  public function getCorPele():string
  {
    return $this->corPele;
  }
  
  public function setGenero(string $genero):void
  {
    $this->genero = $genero;
  }
  
  public function getGenero() : string 
  {
   return $this->genero; 
  }
  public function setNome(string $nome):void
  {
    $this->nome = $nome;
  }
  
  public function getNome():string
  {
    return $this->nome;
  }
  
  public function setAltura(float $altura): void 
  {
    $this->altura = $altura;
  }
  
  public function getAltura():float
  {
    return $this->altura;
  }
  
  public function setPeso(float $peso): void 
  {
    $this->peso = $peso;
  }

  function getPeso() : float 
  {
    return $this->peso;
  }
  
  public function setIdade(int $idade): void
  {
    $this->idade = $idade;
  }

  public function getIdade() : int 
  {
    return $this->idade;
  }
  
  public function setUsaAparelho(bool $usaAparelho): void
  {
    $this->usaAparelho = $usaAparelho;
  } 
  
  public function getUsaAparelho() : bool
  {
    return $this->usaAparelho;
    
  }

  
}
?>