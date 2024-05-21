<?php 
$contador;
for ($i = 0; $i <= 10; $i++)
{
    $num = readline("Insira um numero: ");

    if ($num < 0)
    {
        $contador++;
    }
}

echo "Tota de numeros negativos: " . $contador;

?>