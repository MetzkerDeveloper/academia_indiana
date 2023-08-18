<?php 

require_once 'Ferrari.php';
require_once 'Chevrolet.php';

$ferrari = new Ferrari(2, 'SF90', 'Vermelha', 100, 'Auto');

$ferrari->acelerar();
$ferrari->acelerar();
$ferrari->acelerar();

var_dump($ferrari);

$chevrolet = new Chevrolet(4, 'Cobalt LTZ', 'Branco', 25, 'Manual');
$chevrolet->acelerar();
$chevrolet->acelerar();
$chevrolet->acelerar();

var_dump($chevrolet);