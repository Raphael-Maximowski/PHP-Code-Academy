<?php

$multiplos_5;
$tam_array;
$contador = 0;
while ($tam_array != 10)
{
    $contador++;
    if ($contador % 5 == 0)
    {
        $multiplos_5[] = $contador;
        $tam_array++;
    }
}

print_r($multiplos_5);

?>

