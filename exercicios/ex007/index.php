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
      $mesArray = [1=>'Janeiro',2=>'fevereiro',3=>'Março',4=>'Abril',5=>'Maio',
                   6=>'Junho',7=>'Julho',8=>'Agosto',9=>'Setembro', 10=>'Outubro',
                   11=>'Novembro',12=>'Dezembro'];
      /*switch ($numMes) {
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
      */
      $numMes = 8;
      $mes = ($numMes <= 12 ) ? $mesArray[$numMes] : " Mês inválido!";
      echo "<p>O mês $numMes é  $mes</p>";
      ?>
    </h4>
  </main>
</body>

</html>