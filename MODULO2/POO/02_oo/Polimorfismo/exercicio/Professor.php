<?php 
namespace Professor;
use Exercicio\Pessoa;
require_once "Pessoa.php";

class Professor extends Pessoa 
{
  private $materia;
  
  public function __construct(string $nome,int $idade,string $genero)
  {
    parent::__construct($nome,$idade,$genero);
  }

  public function matricular($materia)
  {
    $opcoes = ['Port', 'Mat', 'Ing', 'Info','Hist','Geo','Ef','Er'];
    // verifica se a materia informada existe
    if(!in_array($materia, $opcoes)){
      die('A materia informada não existe');
    } 
    
    $matriculas = $this->getMateria();
    
    if(in_array($materia, $matriculas)){
      die('Aluno já matriculado');
    }
    
   $matriculas[] = $materia;
    
   $this->materia = $matriculas;
    
  }
  public function getMateria()
  {
    return is_array($this->materia) ? $this->materia : [];
  }

  public function perguntar($n1, $n2){
    echo "<p>-----------------------------</p>";
   
    echo "<p>Bom dia!</p>";
    echo "<p>O professor ". $this->getNome(). " pergunta: </p>";
    echo "<p>Quanto é a soma entre $n1 + $n2 ? </p>";
    
  }
}