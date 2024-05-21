<?php

echo "Calculando Área e Diagonal de Retangulos . . .\n";
echo "----------------------------------------------\n";
$altura = readline("Insira a Altura: ");
$largura = readline("Insira a Largura: ");

$area = $altura * $largura;
$diagonal = sqrt($altura ** 2 + $largura ** 2);

echo "Area Total retangulo: " . $area . "\n";
echo "Diagonal Retangulo: " . $diagonal . "\n";
echo "----------------------------------------------\n";

?>