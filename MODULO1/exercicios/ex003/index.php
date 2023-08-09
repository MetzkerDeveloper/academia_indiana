<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicios PHP </title>
</head>

<body>
  <main>
    <h1>Preço das parcelas</h1>
    <p>
      <?php

// 3- Termine o script abaixo. A variável $preco contém o valor da venda. Acrescente 12% ao
// preço do produto, divida em 10 parcelas e mostre na tela o valor de cada parcela e o valor total
// da compra.

$preco = 320;

$precoFinal = ($preco * 0.12) + $preco;

$precoParcela = $precoFinal /10;
  
echo"Cada parcela terá um valor de R\$ $precoParcela  e o total da compra foi de R\$ $precoFinal !"


?>
    </p>
  </main>
</body>

</html>