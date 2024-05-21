<?php

$num1 = 0;
$num2 = 0;

function soma($num1, $num2)
{
    echo "A soma de " . $num1 . " + " . $num2 . " = " . $num1 + $num2;
}

function subtracao($num1, $num2)
{
    echo "A subtração de " . $num1 . " - " . $num2 . " = " . $num1 - $num2;
}

function multiplicacao($num1, $num2)
{
    echo "A mutiplicação de " . $num1 . " * " . $num2 . " = " . $num1 * $num2;
}

function divisao($num1, $num2)
{
    echo "A divisão de " . $num1 . " / " . $num2 . " = " . $num1 / $num2;
}

$escolha = 0;
while ($escolha != 5)
{
    echo "Calculadora - \n";
    echo "=============================================\n";
    echo "Opções Disponiveis: \n[1] Soma \n[2] Subtração \n[3] Multiplicação \n[4] Divisão\n[5] Sair\n";
    $escolha = readline("Insira sua escolha: ");

    if ($escolha == 5)
    {
        break;
    }

    echo "=============================================\n";
    $num1 = readline("Insira o primeiro numero: ");
    $num2 = readline("Insira o segundo numero: ");
    system("clear");
    
    if ($escolha == 1)
    {
        soma($num1, $num2);
        sleep(3);
        system("clear");
    }

    else if ($escolha == 2)
    {
        subtracao($num1, $num2);
        sleep(3);
        system("clear");
    }

    else if ($escolha == 3)
    {
        multiplicacao($num1, $num2);
        sleep(3);
        system("clear");
    }
    else if ($escolha == 4)
    {
        divisao($num1, $num2);
        sleep(3);
        system("clear");
    }
}

system("clear");
echo "==============================\n";
echo "Finalizando Sistema!\n";
echo "==============================\n";

?>