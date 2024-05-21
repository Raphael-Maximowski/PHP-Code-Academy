<?php 

$descontos_juros = array(10,5,10);

echo "Calculando Preços . . .\n";
echo "--------------------------------------------\n";
$price = readline("Insira o Preço: ");
echo "Formas de Pagamento:\n[1] A vista em Dinheiro\n[2] Avista no Cartão\n[3] Parcelado em 2x\n[4] Parcelado em 3x\n";
echo "--------------------------------------------\n";
$escolha = readline("Insira sua escolha: ");

if ($escolha == 1)
{
    echo "Desconto Aplicado: " . $descontos_juros[0] . "%\n";
    echo "Valor do Produto com Desconto: " . $price - (($price / 100) * $descontos_juros[0]) . "\n";
}

else if ($escolha == 2)
{
    echo "Desconto Aplicado: " . $descontos_juros[1] . "%\n";
    echo "Valor do Produto com Desconto: " . $price - (($price / 100 ) * $descontos_juros[1]) . "\n";
}

else if ($escolha == 3)
{
    echo "Método sem Desconto! \nValor Cobrado: " . $price . "\n";
}

else if ($escolha == 4)
{
    echo "Taxa de Juros Aplicada: " . $descontos_juros[2] . "%\n";
    echo "Valor do Produto com Juros: " .  $price + (($price / 100) * $descontos_juros[2]) . "\n"; 
}

?>