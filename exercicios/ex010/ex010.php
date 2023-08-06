<?php
/*
10- Crie um script em PHP crie dois vetores de 10 posições preenchidos com valores aleatórios.
Faça a soma dos elementos de mesmo índice, colocando o resultado em um terceiro vetor.
Imprima os três vetores, um após o outro. Obs: Utilize um for
*/

$vetor1 = array();
$vetor2 = array();

for($i = 0; $i < 10; $i++) {
    $vetor1[] = rand(0, 10);
    $vetor2[] = rand(0, 10);
}
// Criando um terceiro vetor que é a soma dos elementos dos dois vetores anteriores
$vetor3 = array();
for($i = 0; $i < 10; $i++) {
    $vetor3[] = $vetor1[$i] + $vetor2[$i];
}

// Imprimindo os três vetores
echo "Vetor 1: ";
print_r($vetor1);
echo"<br>";
echo "Vetor 2: ";
print_r($vetor2);
echo"<br>";
echo "Vetor 3: ";
print_r($vetor3);
?>