<?php

/*$array = ["banana", "abacaxi", "uva"];

var_dump($array);
echo"<br><br>";


$cliente = [
  "nome" => "Plinio",
  "Sobrenome" => "Pavin",
  "telefones" => [
  "fixo" => "3383-2441",
  "celular" => "19 9 98095744"
   ],
  ];
  echo "<pre>";
  var_dump($cliente);
  echo "</pre> <br>";
  echo $cliente['nome'] ."<br>";
  echo $cliente['telefones']['fixo'];
  echo "<br> <br>";

  echo count($cliente,1);
  */


/*$arrayA = array(
    'r' => 'Red',
    'b' => 'Blue',
    'y' => 'Yellow',
    );
    $arrayB = array(
    'b' => 'Black',
    'w' => 'White',
    'p' => 'Pink',
    );
    $arrayC = $arrayA + $arrayB;
    echo "<pre>";
    print_r($arrayC);
    echo "</pre>";
    */

/*$arrayA = array(
      'b' => 'Black',
      'w' => 'White',
      'g' => 'Gray',
      );
      $arrayB = array(
      'g' => 'Gray',
      'b' => 'Black',
      'w' => 'White',
      );
      //Verificando se os dois Arrays são iguais:
      echo "<pre>";
      var_dump( $arrayA == $arrayB);//bool(true)
      echo "</pre> <br>";
      echo "<pre>";
      //Verificando se os dois Arrays são iguais e suas chaves então na mesma ordem:
      var_dump( $arrayA === $arrayB);//bool(true)
      echo "</pre>";
      */

/* $arrayA = array(
        'b' => 'Black',
        'w' => 'White',
        'g' => 'Gray',
        'p' => 'pink',
        );
        $arrayB = array(
        'g' => 'Gray',
        'b' => 'Black',
        'w' => 'White',
        );
        //Verificando se os dois Arrays não são iguais:
        var_dump( $arrayA <> $arrayB);//bool(true)
        echo "<br>";
       //Verificando se os dois Arrays não são idênticos:
        var_dump( $arrayA !== $arrayB);//bool(true)
    */

/*$frutas = array("d" => "limao", "a" => "laranja", "b" => "banana", "c" =>
    "melancia");
    asort($frutas);
    echo "<pre>";
    var_dump($frutas);
    echo "</pre> <br><br>";*/

/*$frutas = array("d" => "limao", "a" => "laranja", "b" => "banana", "c" => "melancia");
    arsort($frutas);
    echo"<pre>";
    var_dump($frutas);
    echo"</pre>";
    */
    
/*$array1 = array("a" => "verde", "vermelho", "azul", "vermelho");
$array2 = array("b" => "verde", "amarelo", "vermelho");
$result = array_diff($array1, $array2);
echo "<pre>";
print_r($result);
echo "</pre>";*/   


$alunos = array("João", "Maria", "José", "Antonio");

echo array_search("Maria",$alunos);
echo "<br>";
if (in_array("Maria", $alunos)) {
echo "Maria é aluna";
}else{
  echo "Maria não é aluna";
}


?>