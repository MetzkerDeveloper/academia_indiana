<?php 

class Pessoa
{
  //atributos
  private string $nome;
  public int $idade;
  private string $corDosOlhos;
  private string $genero;
  public float $altura;
  public float $peso;

   public function __construct(string $corDosOlhos, string $genero) 
   {
    $this->setCorDosOlhos($corDosOlhos);
    $this->setGenero($genero);
  }
  public function setNome (string $nome):void
  {
    $this->nome = $nome;
  }

  public function getNome() : string 
  {
    return $this->nome;
  }

  public function setIdade(int $idade) : void 
  {
    $this->idade = $idade;
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
 
 
 public function setAltura(float $altura) : void 
 {
  $this->altura = $altura;
 }

 public function getAltura() : float
 {
  return $this->altura;
 }
  
 public function setPeso(float $peso) : void 
 {
  $this->peso = $peso;
 }

 public function getPeso() : float
 {
  return $this->peso;
 }


 
}

/*

No caso do atributo corDosOlhos só poderá ser inserido uma dessas opções: 
- Azul;
- Castanho;
- Verde;
- Preto.

E no gênero estas opções:
- Masculino;
- Feminino;
*/






?>