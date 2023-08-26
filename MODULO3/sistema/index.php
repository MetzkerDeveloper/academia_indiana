<?php
require_once 'header.php';
require_once 'Conecta.php';
require_once 'Carro.php';

if (isset($_POST['submit'])) {
  $carro = new Carro(strip_tags($_POST['nome']), strip_tags($_POST['marca']), strip_tags($_POST['ano']));
  $cmd = $conn->prepare('INSERT INTO carros (nome,marca,ano) VALUES (:n,:m,:a)');
  $cmd->bindValue(":n", $carro->getNome());
  $cmd->bindValue(":m", $carro->getMarca());
  $cmd->bindValue(":a", $carro->getAno());
  $cmd->execute();
}

$anoAtual = date('Y');
?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary my-2 mx-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Adicionar Veículo
</button>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class=" modal-dialog">
    <div class="modal-content">
      <div class="modal-header" <h1 class="modal-title fs-5" id="staticBackdropLabel">Adicionar Veículo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="Digite o nome do veiculo">
          </div>
          <div class="mb-3">
            <label class="form-label">Marca</label>
            <input type="text" name="marca" class="form-control" placeholder="Digite a marca do veiculo">
          </div>
          <div class="mb-3">
            <label class="form-label">Ano</label>
            <input type="text" name="ano" class="form-control" min="1980" max="<?= $anoAtual ?>"
              placeholder="Digite o ano do veiculo">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="submit" name="submit" class="btn btn-primary">Registrar</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>
<!-- Tabela -->
<div class="container my-4">
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>NOME</th>
        <th>MARCA</th>
        <th>ANO</th>
        <th>REGISTRO</th>
        <th>AÇÕES</th>
      </tr>
    </thead>
    <tbody>
      <?php          
          if((isset($_POST['query']))  && (!empty($_POST['search']))){
            //$query = $_POST['query'];
            $cmd = $conn->prepare("SELECT * FROM carros WHERE marca = :search ");
            $cmd->bindValue(":search",$_POST['search']);
            $cmd->execute();
            
            $results = $cmd->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($results as $result) 
            {
              echo "
              <tr>
              <th>$result[id]</th>
              <td>$result[nome]</td>
              <td>$result[marca]</td>
              <td>$result[ano]</td>
              <td>$result[data_inc]</td>
              <td>
                <a class='btn btn-primary' href='edit.php?id=$result[id]'> Editar</a>
                <a class='btn btn-danger' href='delete.php?id=$result[id]'> Excluir</a>
              </td>
            </tr>
              ";
            } 
          }else{
            $cmd = $conn->prepare("SELECT * FROM carros");
            $cmd->execute();
            $results = $cmd->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($results as $result) 
            {
              echo "
              <tr>
              <th>$result[id]</th>
              <td>$result[nome]</td>
              <td>$result[marca]</td>
              <td>$result[ano]</td>
              <td>$result[data_inc]</td>
              <td>
                <a class='btn btn-primary' href='edit.php?id=$result[id]'> Editar</a>
                <a class='btn btn-danger' href='delete.php?id=$result[id]'> Excluir</a>
              </td>
            </tr>
              ";
            } 
          }
        ?>
    </tbody>
  </table>
</div>
<?php 
require_once 'footer.php';
?>