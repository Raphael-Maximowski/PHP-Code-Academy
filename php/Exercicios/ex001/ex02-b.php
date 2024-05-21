<?php 

echo "Calculando media Ponderada . . .\n";

$nota1 = readline("Insira sua primeira nota: ");
$nota2 = readline("Insira sua segunda nota: ");
$nota3 = readline("Insira sua terceira nota: ");
$nota4 = readline("Insira sua quarta nota: ");

$pesos = [1, 2, 3, 4];

echo "Medias Cosideradas:\nPeso Nota1: 1\nPeso Nota2: 2\nPeso Nota3: 3\nPeso Nota4:4\n";

$valor = ($pesos[0] + $nota1) + ($pesos[1] + $nota2) + ($pesos[2] + $nota3) + ($pesos[3] + $nota4);
$divisor = $pesos[0] + $pesos[1] + $pesos[2] + $pesos[3];

echo "Media Ponderada: " . $valor / $divisor;

?>