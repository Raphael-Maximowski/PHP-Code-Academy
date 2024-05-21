<?php

$soma = 0;
$media = 0;
$quantidade_valores = 0;

for ($i = 50; $i <= 70; $i++)
{
    if ($i % 2 == 0)
    {
        $soma += $i;
        $quantidade_valores++;
    }
}

echo "Soma total: " . $soma . "\n";
echo "Media total: " . $soma / $quantidade_valores;

?>