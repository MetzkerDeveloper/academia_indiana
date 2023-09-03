<?php 
session_start();

$anoAtual = date('Y');
if((isset($_POST['submit'])) && (!empty($_POST['nome'])) && (!empty($_POST['senha'])) ){
  
$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$idade = filter_input(INPUT_POST,'idade',FILTER_VALIDATE_INT);
$senha = filter_input(INPUT_POST,'senha',FILTER_DEFAULT);

}else{
  header('Location: index.html');
  exit();
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula Indiana Web</title>
  <link rel="stylesheet" href="formStyle.css">
</head>

<body>
  <header class="cabecalho">
    <h1 class="titulo">Aula Web - Academia Indiana de TI <span>- Boa aula <?=$nome?></span></h1>
    <a href="index.html">Sair</a>
  </header>

  <aside class="menu">
    <div class="container">
      <span>Modulos Curso</span>
      <a href="#modulo1">Modulo 1 - Básico</a>
      <a href="#modulo2">Modulo 2 - Poo</a>
      <a href="#modulo3">Modulo 3 - Sgbd</a>
      <a href="#modulo4">Modulo 4 - Web</a>
    </div>

  </aside>
  <article class="conteudo">

    <div class="caixa-section">
      <section id="#modulo1">
        <embed src="./aulas_pdf/Módulo básico - Aula 03.pdf" width="1020" height="600" type='application/pdf'>
      </section>
      <section id="#modulo2">
        <embed src="./aulas_pdf/academia_indiana_material_poo.pdf" width="1020" height="600" type='application/pdf'>
      </section>
      <section id="#modulo3">
        <embed src="./aulas_pdf/academia_indiana_sgbd.pdf" width="1020" height="600" type='application/pdf'>
      </section>
      <section id="#modulo4">
        <embed src="./aulas_pdf/Academia Indiana Módulo 4 - WEB.pdf" width="1020" height="600" type='application/pdf'>
      </section>
    </div>

  </article>
  <footer class="rodape">
    &copy;WM | DEV <?=$anoAtual ?> </footer>
  <script src="script.js"></script>
  <!-- <script>
  const contentSections = document.querySelectorAll('.caixa-section section');
  console.log(contentSections)
  </script> -->

</body>

</html>