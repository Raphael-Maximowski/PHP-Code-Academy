<?php 

$price = 1.30;
echo "-----------------------------------\n";
echo "Comprando Maças\n";
echo "Preço Tabelado: R$1.30\n";
echo "Preço Promocional A partir de 11 Unidades: R$1.0\n";
echo "-----------------------------------\n\n";
$macas = readline("Insira a Quantidade de Maças Desejadas: ");
echo "-----------------------------------\n";

if ($macas > 11)
{
    $price = 1;
    echo "Valor total: " . $macas * $price;
}

else 
{
    echo "\nValor total: " . $macas * $price;
}

?>