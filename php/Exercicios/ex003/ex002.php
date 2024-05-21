<?php 

$media = 0;
$soma = 0;
$num;
for ($i = 1; $i <=10; $i++)
{
    $num = readline("Insira um numero: ");
    $soma += $num;
}

echo "Soma total: " . $soma . "\n";
echo "Media total: " . $soma / 10 . "\n";

?>