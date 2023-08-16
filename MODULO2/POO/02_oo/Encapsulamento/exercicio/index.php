<?php 

require_once "Pessoa.php";


$pessoa = new Pessoa('José','Azul','Masculino');

$pessoa
->setIdade(23)
->setAltura(1.83)
->setPeso(80);

var_dump($pessoa);
//$pessoa2 = new Pessoa('Wilbert', 23,'Azul','Não informar',1.83, 90.55);
//var_dump($pessoa2);



?>