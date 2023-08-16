<?php

require_once 'Usuario.php';
require_once 'Funcionario.php';

$usuario = new Usuario('Joao', new Cpf('156.588.140-06'), 'joao.silva', 'joao@123');

var_dump($usuario->getCpf());


$funcionario = new Funcionario('Adriano', new Cpf('597.744.920-80'));

var_dump($funcionario->getCpf());