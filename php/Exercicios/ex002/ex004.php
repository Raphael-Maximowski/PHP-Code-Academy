<?php 

echo "Calculando Medias . . .\n";
echo "-----------------------------------------\n";
$nota1 = readline("Insira sua Primeira nota: ");
$nota2 = readline("Insira sua Segunda nota: ");
echo "-----------------------------------------\n";

$media = ($nota1 + $nota2) / 2;

if ($media >= 6)
{
    echo "Media Atual: " . $media . "\n";
    echo "Você passou.";
}

else 
{
    echo "Media Atual: " . $media . "\n";
    echo "Você não passou.";
}

?>