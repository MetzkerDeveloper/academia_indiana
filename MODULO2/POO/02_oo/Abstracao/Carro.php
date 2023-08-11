<?php 

class Carro 
{
    public string $cor;
    public int $portas;
    public int $velocidade;
    public bool $faroisLigados;
    public bool $transmissaoManual;

    public function __construct(int $portas, string $cor)
    {
     $this->portas = $portas;
     $this->cor = $cor;
     
    }

  public function setVelocidade(int $velocidade):void
  {
    $this->velocidade = $velocidade;
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