<?php 
require_once 'Conecta.php';

$usuario = filter_input(INPUT_POST,'palavra');

if(!empty($usuario)) {
  
  $cmd = $conn->prepare("SELECT * FROM carros WHERE marca LIKE :u LIMIT 20");
  $cmd->bindValue(":u", "%" . $usuario . "%");
} else {

  $cmd = $conn->prepare("SELECT * FROM carros LIMIT 20");
}

$cmd->execute();

$results = $cmd->fetchAll(PDO::FETCH_ASSOC);


foreach($results as $result){
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
?>