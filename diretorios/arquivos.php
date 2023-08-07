<?php 

/*$arquivo = fopen("lista.txt", "a");

fwrite($arquivo, "Minha primeira linha". PHP_EOL);
fwrite($arquivo, "Minha segunda linha". PHP_EOL);
fwrite($arquivo, "Minha terceira linha". PHP_EOL);

fclose($arquivo);*/

/*$filename = 'lista.txt';
$handle = fopen($filename,"r");
$conteudo = fread($handle,filesize($filename));
fclose($handle);

echo $conteudo;*/

//$arquivo = file_get_contents('lista2.txt');

//echo $arquivo;

// remover arquivo pelo php
$arquivo = 'lista2.txt';

if(is_file($arquivo)){
  unlink($arquivo); // funcao apaga um arquivo
  echo "Arquivo ". $arquivo." removido";
}else{
  echo "Arquivo não existe";
}


?>