<?php 
require_once "Pessoa.php";


//objeto
$pessoa = new Pessoa();
//metodos
$pessoa->setNome("Waleriano");
$pessoa->setIdade(23);
$pessoa->setCorCabelo("Preto");
$pessoa->setCorOlhos("Castanhos");
$pessoa->setGenero("Masculino");
$pessoa->setAltura(1.83);
$pessoa->setUsaAparelho(false);

require_once "utilitarios.php";

//atributos
  mostrarMensagem([
 "Nome: "  . $pessoa->getNome(),
 "Idade: " . $pessoa->getIdade(),
 "Cabelos: " . $pessoa->getCorCabelos(),
 "Olhos: " . $pessoa->getcorOlhos(),
 "Genero: " . $pessoa->getGenero(),
 "Altura: " . $pessoa->getAltura(),
 "Aparelho: " . $pessoa->getUsaAparelho()
]);

?>