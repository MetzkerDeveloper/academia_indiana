<?php
/* 
15 - Crie uma função em PHP que receba a altura e o peso de uma pessoa, calcule seu IMC de acordo com a
fórmula abaixo:
IMC = Peso dividido pela altura ao quadrado ( peso ÷ (altura²)).
A função deve retornar uma string (magreza, normal. sobrepeso ou obesidade) de acordo com a tabela abaixo:

Magreza < 18.5
Normal 18.5 a 24.9
Sobrepeso 24.9 a 30
Obesidade > 30
*/

 
function imc($peso, $altura)
{
  $imc = $peso / pow(($altura/100),2); // outro método seria $peso / (($altura/100)**2);
  if($imc < 18.5)
  {
    echo "Você está com Magreza ";
  }
  elseif($imc > 18.5 && $imc < 24.9)
  {
    echo "Você está com Peso Normal ";
  }
  elseif($imc > 24.9 && $imc < 30)
  {
    echo "Você está com Sobrepeso ";
  }
  else
  {
    echo "Você está com Obesidade ";
  }
  
  return  number_format($imc,2,",",".");
}

echo "seu IMC é de ". imc(83,183);

?>