<?php

// function exibir_menssagem( $nome = 'Waleriano'){
//   echo "Seja bem vindo, $nome ! <br>";
// }

// exibir_menssagem();

// function somar($a , $b){
//   return $a + $b;
// }

// function multiplicar($a , $b){
//    return $a * $b;
//  }

// $x = somar(2,8);

// $y = multiplicar($x,2);

// echo $y;

$globalName = "Waleriano";

function hello()
{

  $localName = "José";
  echo "Ola, $localName ! <br> ";
  global $globalName;
  echo "Ola, $globalName ! <br>";
}

hello();

$func = function($nome) {
  echo "Olá, $nome";
};

function teste($f){
  $f("Waleriano");
}

teste($func);
?>