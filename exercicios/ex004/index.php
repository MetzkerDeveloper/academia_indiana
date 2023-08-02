<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicios PHP </title>
</head>

<body>
  <main>
    <h1>Par ou Impar?</h1>
    <p>
      <?php

// 4- Termine o script abaixo, verificando se a variável $numero é par ou ímpar e exiba na tela a
// mensagem “número par” ou “numero impar”.

$numero = 7;

if($numero % 2 === 0){
  echo "O número $numero é par!";
}else{
  echo "O número $numero é impar";
}

?>
    </p>
  </main>
</body>

</html>
