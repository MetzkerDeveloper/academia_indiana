<?php
/*
10- Crie um script em PHP crie dois vetores de 10 posições preenchidos com valores aleatórios.
Faça a soma dos elementos de mesmo índice, colocando o resultado em um terceiro vetor.
Imprima os três vetores, um após o outro. Obs: Utilize um for

*/

$arrayNum = array(1,5,8,9,4,6,10,2,7,3);
$arrayNum2 = array(10,7,5,4,6,9,1,3,2,8);

foreach($arrayNum  as $index1 => $arr1){
	
	foreach($arrayNum2 as $index2 => $arr2){
		
		if($index1 == $index2){
			echo "Indice [$index1]: $arr1 + Indice [$index2]: $arr2 => A soma é [".$arr1 + $arr2."]<br>";
		}
	}
}

?>