<?php

$salario = 2499;

$carros = array("Gol", "Astra", "320I", "Uno", "Parati");

$valor_carros = array(23000, 27000, 120000, 15000, 16000); 

$total_vendas = $valor_carros[0] + $valor_carros[1] + $valor_carros[2] + $valor_carros[3] + $valor_carros[4];
$porcentagens = array(5, 2);

$salario_total = ($total_vendas / 100) * $porcentagens[0] + (($valor_carros[0] / 100) * $porcentagens[1] + ($valor_carros[1] / 100) * $porcentagens[1] + ($valor_carros[2] / 100) * $porcentagens[1] + ($valor_carros[3] / 100) * $porcentagens[1] + ($valor_carros[4] / 100) * $porcentagens[1]) + $salario;

echo "Calculando Salário Vendedores\n";

echo "------------------------------------------\n";

echo "Salario Base: " . $salario . "\n";
echo "Porcentagem por carro: " . $porcentagens[1] . "%\n";
echo "Porcentagem total de vendas: " . $porcentagens[0] . "%\n";

echo "------------------------------------------\n";

echo "Carros - Valor Total - Comissão\n";
echo $carros[0] . "    - R$" . $valor_carros[0] . "     - Comissão: " .  ($valor_carros[0] / 100) * $porcentagens[1] . "\n"; 
echo $carros[1] . "  - R$" . $valor_carros[1] . "     - Comissão: " .  ($valor_carros[1] / 100) * $porcentagens[1] . "\n"; 
echo $carros[2] . "   - R$" . $valor_carros[2] . "    - Comissão: " .  ($valor_carros[2] / 100) * $porcentagens[1] . "\n"; 
echo $carros[3] . "    - R$" . $valor_carros[3] . "     - Comissão: " .  ($valor_carros[3] / 100) * $porcentagens[1] . "\n"; 
echo $carros[4] . " - R$" . $valor_carros[4] . "     - Comissão: " .  ($valor_carros[4] / 100) * $porcentagens[1] . "\n"; 

echo "------------------------------------------\n";

echo "Vendas Totais : " . $total_vendas . "\n";
echo "Comissão Vendas Totais: " . ($total_vendas / 100) * $porcentagens[0] . "\n";
echo "Valor de Comissão por carro: " . (($valor_carros[0] / 100) * $porcentagens[1] + ($valor_carros[1] / 100) * $porcentagens[1] + ($valor_carros[2] / 100) * $porcentagens[1] + ($valor_carros[3] / 100) * $porcentagens[1] +
($valor_carros[4] / 100) * $porcentagens[1]) . "\n";

echo "------------------------------------------\n";

echo "Salário total: " . $salario_total;



?>

