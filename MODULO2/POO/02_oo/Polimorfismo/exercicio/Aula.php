<?php

namespace Aula;
require_once 'Aluno.php';
require_once 'Professor.php';

class Aula 
{
  private $professor;
  private $aluno;
  private bool $turma;
  

  public function marcarAula($aluno, $professor){
    if($aluno->getMateria() === $professor->getMateria()){
      $this->turma = true;
      $this->aluno = $aluno;
      $this->professor = $professor;
    }else{
      $this->turma = false;
      $this->aluno = null;
      $this->professor = null;

      echo "Aula não pode ser realizada pois o professor não é especializado na materia que o aluno se encontra matriculado!";
    } 
  }

  public function darAula($n1, $n2)
  {
    if($this->turma){
      $this->professor->perguntar($n1,$n2);
      $this->aluno->resposta($n1,$n2);
    }
  }
  
}