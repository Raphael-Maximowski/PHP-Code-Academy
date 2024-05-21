<?php

$contador = 1;
while ($contador != 10)
{
    echo "TABUADA DO " . $contador . "\n";
    echo "===================================\n";
    for ($i = 1; $i >= 10; $i++)
    {
        echo $contador . " * " . $i . " = " . $contador * $i . "\n";
    }
    echo "===================================\n\n";
    $contador++;
}

?>