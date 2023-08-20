<?php

namespace Chevrolet;

use Polismorfirmo\Carro;

require_once 'Carro.php';

class Chevrolet extends Carro
{
    public function acelerar() 
    {
        $this->velocidade += 25;
    }
}