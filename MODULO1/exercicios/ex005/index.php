<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicios PHP </title>
</head>

<body>
  <main>
    <h1>Validação entre A e B</h1>
    <p>
      <?php
      // 5- Finalize o script abaixo verificando se valor da variável $a é maior ou menor que o valor da variável
      // $b. A mensagem a ser impressa deve ser “A maior que B” ou “A menor que B”.

      $a = 7;
      $b = 21;

      if ($a > $b) {
        echo "A é igual a:  $a e é maior que B: $b";
      } else {
        echo "A igual a: $a e é menor que B: $b";
      }

      ?>
    </p>
  </main>
</body>

</html>