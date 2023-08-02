<?php
// 1- Termine o script abaixo, somando o valor das variáveis $valor1 e $valor2, e multiplicando o
//resultado pelo valor de $valor1 exibindo o resultado na tela.
$valor1 = $_POST['v1'] ?? 0;
$valor2 = $_POST['v2'] ?? 0;
$resultado = ($valor1 + $valor2) * $valor1;
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicios PHP</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <h1> Somando e multiplicando</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
      <label for="v1">Valor 1</label>
      <input type="text" name="v1" id="v1" value="<?php echo $valor1; ?>"> <br>
      <label for="v2">Valor 2</label>
      <input type="text" name="v2" id="v2" value="<?php echo $valor2; ?>"> <br>
      <input type="submit" value="Calcular">

    </form>
  </main>
  <section>
    <?php
    echo "<p>A soma entre <strong>$valor1</strong> e <strong>$valor2</strong>, multiplicado por <strong>$valor1</strong>
    é igual a <strong>$resultado</strong></p>"
    ?>
  </section>
</body>

</html>