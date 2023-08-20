<?php

namespace Ferrari;

use Polismorfirmo\Carro;

require_once 'Carro.php';

final class Ferrari extends Carro
{
    public function acelerar() 
    {
        $this->velocidade += 100;
    }
}