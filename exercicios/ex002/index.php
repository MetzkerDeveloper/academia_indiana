<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicios PHP </title>
</head>

<body>
  <main>
    <h1>Calculando média</h1>
    <p>
      <?php

// 2- Termine o script abaixo, calculando a média dos valor de $valor1, $valor2 e $valor3,
// armazenando o resultado na variável $media e exibindo na tela a mensagem: Média calculada:
// [valor]
$valor3 = 7;
$valor4 = 3;
$valor5 = 9;

$media = ($valor3+ $valor4 + $valor5)/3;

echo "O resultado da Média calculada entre os números $valor3, $valor4 , $valor5 é <strong>". number_format( $media,2,",","." ) ."</strong>";

?>

    </p>
  </main>
</body>

</html>