<?php
/* 
14- Crie uma função em PHP que calcule e imprima o salário reajustado de um funcionário
de acordo com a seguinte regra:
• salários até R$ 3.000,00 , reajuste de 50%
• salários de R$ 3.000,00 ou mais, reajuste de 30%

*/

function salarios($salario)
{

if($salario > 3000)
{
  $salario += $salario *0.3;
}
else{
  $salario += $salario* 0.5;
}
 return $salario;

};

echo salarios(1000);

?>