<?php 

$salario_min = 1320;
$condicao = array(5, 3);
$base = 1500;

echo "Calculando Salarios . . .\n";
echo "----------------------------------------------\n\n";
$valor = readline("Insira o valor total Reais em Vendas: R$");
echo "----------------------------------------------\n";

if ($valor <= $base)
{
    echo "Calculando Valor de Comissão . . .\n";
    $media = ($valor / 100) * $condicao[1];
    echo "Comissão aplicada: R$" . $media . "\n";
    echo "Valor total: R$" . $salario_min + $media . "\n"; 
    echo "----------------------------------------------\n";
}

else if ($valor > $base)
    {
        echo "Calculando Valor de Comissão . . .\n";
        $media = (1500 / 100) * $condicao[1];
        $valor_acima = $valor - 1500;
        $media_acima = ($valor_acima / 100) * $condicao[0];
        echo "Comissão aplicada até R$ 1500: R$" . $media . "\n";
        echo "Comissão Acima de R$ 1500: R$" . $media_acima . "\n";
        echo "Salario total: R$" . $salario_min + $media + $media_acima . "\n"; 
        echo "----------------------------------------------\n";
    }