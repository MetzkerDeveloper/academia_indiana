<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicios PHP </title>
</head>

<body>
  <main>
    <h1>Número Positivo, Negativo ou Zero?</h1>
    <p>
      <?php

      //  6- Termine o script abaixo, verificando se a variável $numero valor positivo, negativo ou igual a zero.
      // Exiba na tela a mensagem: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".


      $numero = 0;

      if($numero < 0){
        echo "Valor Negativo";
      }else if($numero > 0 ){
        echo"Valor positivo";
      }else{
        echo"Igual a zero";
      }
      
      ?>
    </p>
  </main>
</body>

</html>