<?php

echo "Classificando numeros: \n";
echo "-----------------------------\n";
$num = readline("Insira um numero: ");
echo "-----------------------------\n";
echo "Padrões\n[1] Entre 30 e 90 \n[2] Maior que 120\n";
echo "-----------------------------\n";

if ($num >= 30 && $num <= 90) { echo "Dentro do Padrão [1]\n"; }

else if ($num > 120) { echo "Dentro do Padrão [2]\n"; }

else 
{
    echo "Fora de Todos os Padrões!\n";
}


?>