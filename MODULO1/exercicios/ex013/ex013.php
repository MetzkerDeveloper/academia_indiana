<?php
/* 
13- Crie uma função que receba 2 notas ($n1 e $n2) de um aluno. Essa função deve
retornar um booleano indicando se o aluno foi aprovado. Para ser aprovado, a soma das
notas deve ser igual ou superior a 19 e ambas devem ser superiores a 7.

*/

function notas($n1, $n2)
{

  if ($n1 > 7 && $n2 > 7) 
  {
    $resultado = $n1 + $n2;

    if ($resultado >= 19) 
    {
      return "APROVADO";
    }
  }

  return "REPROVADO";
};

echo notas(9,10);

?>