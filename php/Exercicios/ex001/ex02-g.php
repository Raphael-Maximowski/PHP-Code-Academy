<?php

echo "Calculando Area Losango: \n";
echo "----------------------------------------------------------\n";
$diagonal_maior = readline("Insira o valor da Diagonal Maior: ");
$diagonal_menor = readline("Insira o valor da Diagonal Menor: ");
echo "----------------------------------------------------------\n";
echo "Area total: " . ($diagonal_maior * $diagonal_menor) / 2;

?>