<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicios PHP </title>
</head>

<body>
  <main>
    <h1>Mês Selecionado</h1>
    <h4>
      <?php

      // 7- Termine o script abaixo, exibindo o nome do mês correspondente à variável $numMes e caso o
      // valor de $numMes esteja fora do intervalo entre 1 e 12, exibir a mensagem “Mês inválido”

      $numMes = 8;
      switch ($numMes) {
        case 1:
          $mes = 'Janeiro';
          break;
        case 2:
          $mes = 'Fevereiro';
          break;
        case 3:
          $mes = 'Março';
          break;
        case 4:
          $mes = 'Abril';
          break;
        case 5:
          $mes = 'Maio';
          break;
        case 6:
          $mes = 'Junho';
          break;
        case 7:
          $mes = 'Julho';
          break;
        case 8:
          $mes = 'Agosto';
          break;
        case 9:
          $mes = 'Setembro';
          break;
        case 10:
          $mes = 'Outubro';
          break;
        case 11:
          $mes = 'Novembro';
          break;
        case 12:
          $mes = 'Dezembro';
          break;
        
        default:
          $mes = "Mês Inválido";
          break;
      }
      
      echo "<p>O mês $numMes refere-se a $mes</p>";
 
      ?>
    </h4>
  </main>
</body>

</html>