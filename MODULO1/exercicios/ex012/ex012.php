<?php 
/* 
12- Crie uma função que receba 2 valores inteiros como argumentos e retorne a sua soma.
Se o valor da soma for negativo a função deverá o valor 0.
*/

function somar($valor1, $valor2){
  $somar = $valor1 + $valor2;
  if( $somar < 0 ){
    return 0;
  }else{
    return $somar;
  }
}

echo somar(-7,6);

?>