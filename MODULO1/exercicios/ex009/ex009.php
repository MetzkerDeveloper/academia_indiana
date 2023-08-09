<?php 
/*9- Crie um script em PHP que crie um vetor de 5 elementos inteiros com valores aleatórios,
entre 0 e 10. Encontre e mostre o menor elemento e sua posição no vetor 
*/

$arr = [];
for($i = 0; $i < 5 ; $i++){
	$arr[]= rand(0,10);
}

$minArray = min($arr);
$indice = array_keys($arr, $minArray);

echo "O menor número do array é $minArray e seu indice é $indice[0] "; 

?>