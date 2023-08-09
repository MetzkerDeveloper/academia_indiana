<?php 

function mostrarMensagem(array $messages):void{
  echo PHP_EOL . "-------------------------------". PHP_EOL;

  foreach($messages as $message){
    echo $message . PHP_EOL;
  }
}



?>