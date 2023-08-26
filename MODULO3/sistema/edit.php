<?php 
require_once 'Conecta.php';
require_once 'header.php';

if(isset($_GET['id'])){
$cmd = $conn->prepare("SELECT * FROM carros WHERE id = :id");
$cmd->bindValue(":id", $_GET['id']);
$cmd->execute();
$row = $cmd->fetch(PDO::FETCH_ASSOC);

$nome = $row["nome"];
$marca = $row["marca"];
$ano = $row["ano"];
}
if(isset($_POST['submit'])){
  $cmd =  $conn->prepare("UPDATE carros SET nome=:n, marca=:m, ano=:a WHERE id =:id");
  $cmd->bindValue(":id", $_GET['id']);
  $cmd->bindValue(":n", $_POST['nome']);
  $cmd->bindValue(":m", $_POST['marca']);
  $cmd->bindValue(":a", $_POST['ano']);
  $cmd->execute();
  
header('location:index.php');
exit;
}
$anoAtual = date('Y');
?>

<div class="container">
  <h1>Editar Informações</h1>
  <form method="post" class="form-control">
    <div class="mb-3">
      <label class="form-label">Nome</label>
      <input type="text" name="nome" class="form-control" placeholder="Digite o nome do veiculo" value="<?=$nome ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Marca</label>
      <input type="text" name="marca" class="form-control" placeholder="Digite a marca do veiculo" value="<?=$marca ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Ano</label>
      <input type="text" name="ano" class="form-control" min="1980" max="<?= $anoAtual ?>"
        placeholder="Digite o ano do veiculo" value="<?=$ano ?>">
    </div>
    <div class="modal-footer ml-3">
      <a href="index.php" type="button" class="btn btn-secondary mx-3">Cancelar</a>
      <button type="submit" name="submit" class="btn btn-primary">Atualizar</button>
    </div>
  </form>
</div>
<?php 
require_once 'footer.php';
?>