<?php

use Ferrari\Ferrari;
use Chevrolet\Chevrolet;

require_once 'Ferrari.php';
require_once 'Chevrolet.php';

$ferrari = new Ferrari(2, 'SF90', 'Vermelha', 'Auto');

var_dump($ferrari);

$chevrolet = new Chevrolet(4, 'Cobalt LTZ', 'Branco', 'Manual');

var_dump($chevrolet);