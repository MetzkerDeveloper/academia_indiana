<?php 


class Carro 
{
    private string $nome;
    private string $marca;
    public int $ano;

    public function __construct(string $nome, string $marca, int $ano)
    {
     $this->nome = $nome;
     $this->marca=$marca;
     $this->setAno($ano);
    }

  public function getNome() : string {
    return $this->nome;
  }

  public function getMarca() : string {
    return $this->marca;
  }

  public function setAno(int $ano):void
  {
    if($ano < 0 ){
      echo "Não é possível setar uma ano negativo.";

      return;
    }
    $this->ano = $ano;
  }
  
  public function getAno() : int {
    return $this->ano;
  }
}





?>