<?php

echo "Calculadora de Horas Passadas . . .\n";
echo "---------------------------------------------\n";
$horas = readline("Insira qual Horas São: ");
$minutos = readline ("Insira Quantos Minutos São: ");
echo "---------------------------------------------\n";
echo "Minutos Totalizados: " . ($horas * 60) + $minutos;

?>