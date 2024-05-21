<?php 

$num = -1;
$soma = -1;
$media = -1;
$valores_lidos = 0;
while ($num != 0)
{
    $num = readline("Insira um numero: ");
    $soma += $num;
    $valores_lidos++;
}

$num =  $num + 1;
$soma = $soma + 1;
$valores_lidos = $valores_lidos -1;

echo "Soma total: " . $soma. "\n";
echo "Media total: " . ($soma / $valores_lidos) . "\n";
echo "Valores Lidos: " . $valores_lidos;


?>