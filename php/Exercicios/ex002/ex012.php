<?php 

$valores;
$menor_valor = 10000000;

for ($i = 0; $i < 5; $i++)
{
    $valores[$i] = readline("Insira um valor: ");
    if ($valores[$i] < $menor_valor && $valores[$i] % 2 == 0)
    {
        $menor_valor = $valores[$i];
    }
}
echo "Menor valor digitado: " . $menor_valor . "\n";
?>