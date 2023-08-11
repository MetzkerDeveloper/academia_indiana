<?php 

require_once "Carro.php";


$carro = new Carro(4, 'Branco');

$carro->setVelocidade(40);

echo $carro->getVelocidade();



?>