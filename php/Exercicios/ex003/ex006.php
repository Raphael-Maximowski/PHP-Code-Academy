<?php 

$condicionamento = true;
$continuar = -1;
while ($condicionamento == true)
{
    echo "------------------------------------------------\n";
    $nota1 = readline("Insira sua primeira nota: ");
    $nota2 = readline("Insira sua segunda nota: ");
    
    $media = ($nota1 + $nota2) / 2;
    echo "Media: " . $media . "\n"; 
    echo "------------------------------------------------\n";
    $continuar = readline("Nova Operação [0] NÃO [1] SIM: ");
    if ($continuar == 0)
    {
        $condicionamento = false;
    }
}


?>