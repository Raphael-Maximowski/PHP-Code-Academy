<?php

function num_maior()
{
    $num = array();
    $num_maior = 0;
    $posicao = -1;
    while ($num != 0)
    {
        $posicao++;
        $num[$posicao] = (int) readline("Insira um numero: "); 
        if ($num[$posicao] == 0)
        {
            break;
        }

        if ($num[$posicao] > $num_maior)
        {
            (int) $num_maior = $num[$posicao];
        }

        echo "Valor de parada: 0\n\n";
    }
    
    print_r ($num);
    echo "Numero maior digitado: " . $num_maior;;
}

num_maior();

?>