<?php 

$salario = 1856.94;
$salario = $salario / 7;
$salario = (int) $salario;

$consumo_kw = $salario / 100;

$gasto_mensal = readline("Insira seu consumo mensal de KW: ");

$valor_total = $consumo_kw * $gasto_mensal;
$porcentagem = $valor_total - (($valor_total / 100) * 10);

echo "--------------------------------------------" . "\n";
echo "Valor por QuiloWatts: " . $consumo_kw . "\n";
echo "Valor total: " . $valor_total . "\n";
echo "Valor com 10% OFF: " . $porcentagem . "\n";
echo "--------------------------------------------" . "\n";

?>