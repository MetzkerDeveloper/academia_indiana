<?php 
$dsn = 'mysql:dbname=concessionarias2;host=localhost';
$user = 'root';
$password = '';

try {
  $conn = new PDO($dsn, $user, $password);
  //echo "Conexão realizada com sucesso!";
}catch (PDOException $e)
{
    echo "Erro com banco de dados: ".$e->getMessage();
  
}
catch (Exception $e)
{
    echo "Erro generico: " .  $e->getMessage();
}
?>