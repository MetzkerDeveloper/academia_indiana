<?php 

class Carro 
{
    private string $cor;
    private int $portas;
    public int $velocidade;
    public bool $faroisLigados;
    public bool $transmissaoManual;

    public function __construct(int $portas, string $cor)
    {
     $this->portas = $portas;
     $this->cor = $cor;
     
    }

  public function getCor() : string {
    return $this->cor;
  }

  public function setVelocidade(int $velocidade):void
  {
    if($velocidade < 0 ){
      echo "Não é possível setar uma velocidade negativa.";

      return;
    }

    $this->velocidade = $velocidade;
  }

  public function getVelocidade() : int 
  {
    return $this->velocidade;
  }

  public function setFarois(bool $faroisLigado):void
  {
    $this->faroisLigados = $faroisLigado;
  }

  public function setTransmissaoManual(bool $transmissaoManual ):void
  {
    $this->transmissaoManual = $transmissaoManual;
  }
  
}





?>