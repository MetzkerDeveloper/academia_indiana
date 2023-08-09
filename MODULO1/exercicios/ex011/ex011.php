<?php
/*
11 - Seu salário atual é de R$5.000,00. O do seu colega é de R$2.500,00. Suponha que você
tenha 10% de aumento todo ano e seu colega 20%. Crie um script php que calcula em quantos anos
seu colega irá passar a ganhar mais que você.
*/

$sal1 = 5000;
$sal2 = 2500;
$anos = 0;

echo "Meu salário incial é R\$" . number_format($sal1, 2, ",", ".") . "<br>";
echo "O salário incial do meu colega é R\$" . number_format($sal2, 2, ",", ".") . "<br><br>";

while ($sal1 >= $sal2) {
	$sal1 += $sal1 * 0.1; //aumento do salário em 10%
	$sal2 += $sal2 * 0.2; // aumento do salário em 20%
	$anos++; //Contagem dos anos
}

echo "Meu salário em $anos anos será de R\$" . number_format($sal1, 2, ",", ".") . "<br>";

echo "O salário do meu colega em $anos anos será de R\$" . number_format($sal2, 2, ",", ".") . "<br>";

echo "Então em $anos anos, meu colega ganhará mais que eu.";
?>