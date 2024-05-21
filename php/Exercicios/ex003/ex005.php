<?php 

$num = -1;
$menor = 1000000000;
$maior = 0;
while ($num != 0)
{
    $num = readline("Insira um numero: ");

    if ($num > $menor)
    {
        $menor = $num;
    }

    if ($num > $maior)
    {
        $maior = $num;
    }
}

echo "Maior Numero Digitado: " . $maior . "\n";
echo "Menor Numero Digitado: " . $menor . "\n";
?>