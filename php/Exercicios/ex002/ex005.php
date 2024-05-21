<?php

echo "Calculando Idade . . .\n";

echo "-----------------------------------\n\n";
$ano = readline("Insira o ano que você nasceu: ");
echo "-----------------------------------\n";

$idade = ($ano - 2024) * -1;
$votar = false;
$carteira = false;

echo "Idade Atual: " . $idade . "\n";

if ($idade > 16)
{
    $votar = true;
    echo "Voto: Permitido\n";

    if ($idade >= 18)
    {
        $carteira = true;
        echo "Carteira: Permitido\n";
    }

    echo "-----------------------------------\n";
}

else 
{
    echo "Idade sem Permissão para Voto e CNH\n";
    echo "-----------------------------------\n";
}

?>