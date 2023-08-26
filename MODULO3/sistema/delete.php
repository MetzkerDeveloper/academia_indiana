<?php
    require_once "Conecta.php";    
    if(isset($_GET['id'])){
       $cmd =  $conn->prepare("DELETE FROM carros WHERE id =:id");
       $cmd->bindValue(":id",$_GET['id']);
      $cmd->execute();
    }
    header('location:index.php');
    exit;
?>