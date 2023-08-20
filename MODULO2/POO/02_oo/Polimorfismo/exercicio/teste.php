<?php 

use Aula\Aula;
use Professor\Professor;
use Aluno\Aluno;

require_once 'Aula.php';
require_once 'Professor.php';
require_once 'Aluno.php';

$aluno = new Aluno('Jose',23,'Masculino');
$aluno->matricular('Mat');


$professor = new Professor('Joaquim', 44, 'Masculino');
$professor->matricular('Mat');

$aula = new Aula();
$aula->marcarAula($aluno,$professor);


echo "<pre>";
var_dump($aula);
echo "<br>";
echo $aula->darAula(5,5);
echo "</pre>";