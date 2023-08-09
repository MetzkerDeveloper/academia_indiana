<?php 

class Carro 
{
  //Atributos
    public string $cor;
    public int $portas;
    public int $velocidade;
    public bool $faroisLigados;
    public bool $transmissaoManual;

  // metodos
  public function setCor(string $cor) : void 
  {
      $this->cor = $cor;
  }

  public function setPortas(int $portas): void
  {
    $this->portas = $portas;
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