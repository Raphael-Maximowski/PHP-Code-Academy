<?php
$porcentagens = array(45, 30);
echo "Calculand margem de preços . . .\n";
echo "-------------------------------------------\n";
$valor = readline("Insira o valor do produto: R$");
echo "Margem de lucro abaixo de R$ 20,00: " . $porcentagens[0] . "%\n";
echo "Margem de lucro acima de R$ 20,00: " . $porcentagens[1] . "%\n";
echo "-------------------------------------------\n";

if ($valor < 20)
{
    echo "Calculando reajuste . . .\n";
    echo "Valor tota: R$" . (($valor / 100) * $porcentagens[0]) + $valor;
}
else 
{
    echo "Calculando reajuste . . .\n";
    echo "Valor tota: R$" . (($valor / 100) * $porcentagens[1]) + $valor;
}

?>