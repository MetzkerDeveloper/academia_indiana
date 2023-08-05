<?php 
/* 
12- Crie uma função que receba 2 valores inteiros como argumentos e retorne a sua soma.
Se o valor da soma for negativo a função deverá o valor 0.
*/

function somar($valor1, $valor2){
  if($valor1 < 0 && $valor2 < 0 ){
    return 0;
  }else{
    return $valor1 + $valor2;
  }
}

echo somar(1,1);

?>