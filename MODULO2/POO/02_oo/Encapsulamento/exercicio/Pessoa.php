<?php 

class Pessoa
{
  private string $nome;
  private int $idade;
  private string $corDosOlhos;
  private string $genero;
  private float $altura;
  private float $peso;

   public function __construct(string $nome,int $idade, string $corDosOlhos, string $genero, float $altura, float $peso) 
   {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->setCorDosOlhos($corDosOlhos);
    $this->setGenero($genero);
    $this->altura = $altura;
    $this->peso = $peso;
  }
  
  public function getNome() : string 
  {
    return $this->nome;
  }
  
  public function getIdade(): int
  {
    return $this->idade;
  }

 public function setCorDosOlhos(string $corDosOlhos):void
 {
  if($corDosOlhos == "Azul" || $corDosOlhos == "Castanho" || $corDosOlhos == "Verde" || $corDosOlhos == "Preto")
  {
    $this->corDosOlhos = $corDosOlhos;   
  }else{
    echo "Cor dos olhos inválida" . PHP_EOL;
    }
 }

 public function getCorDosOlhos():string
 {
  return $this->corDosOlhos;
 }

 public function setGenero(string $genero) : void 
 {
  if($genero == "Masculino" || $genero == "Feminino")
  {
    $this->genero = $genero;
  }else{
      echo PHP_EOL . "Genero informado não existe" . PHP_EOL;
   }
 }
 public function getGenero() : string
 {
  return $this->genero;
 }

 public function getAltura() : float
 {
  return $this->altura;
 }
 public function getPeso() : float
 {
  return $this->peso;
 }
}
?>