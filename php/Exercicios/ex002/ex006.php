<?php 

echo "Numeros Maiores . . .\n";
echo "-----------------------------------\n";
$num1 = readline("Insira um numero: ");
$num2 = readline("Insira outro numero: ");
echo "-----------------------------------\n";

$maior = $num1;

if ($num2 > $num1)
{
    $maior = $num2;
    echo "O maior valor é: " . $maior . "\n";
    echo "-----------------------------------\n";
}

else
{
    echo "O maior valor é: " . $maior . "\n";
echo "-----------------------------------\n";
}

?>