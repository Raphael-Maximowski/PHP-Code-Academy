<?php

function celsius()
{
    global $convert;
    global $valor;
    if ($convert == 2)
    {
        $conversao = ($valor * 1.8) + 32;
        echo "A conversão de $valor Graus Celsius para Fahrenheit é: $conversao";
    }

    if ($convert == 3)
    {
        $conversao = ($valor + 273.15);
        echo "A conversão de $valor Graus Celsius para Kelvin é: $conversao";
    }
}

function fahrenheit()
{
    global $convert;
    global $valor;

    if ($convert == 1)
    {
        $conversao = ($valor - 32) / 1.8;
        echo "A conversão de $valor Fahrenheit para Celsius é: $conversao";
    }

    if ($convert == 3)
    {
        $conversao = ($valor + 459.67) * (5/9);
        echo "A conversão de $valor Fahrenheit para Kelvin é: $conversao";
    }
}

function kelvin ()
{
    global $convert;
    global $valor;

    if ($convert == 1)
    {
        $conversao = ($valor - 273.15);
        echo "A conversão de $valor Kelvin para Celsius é: $conversao";
    }

    if ($convert == 2)
    {
        $conversao = ($valor - 273.15) * (5/9 + 32);
        echo "A conversão de $valor Kelvin para Fahrenheit é: $conversao";
    }
}


echo "Convertendo temperaturas . . .\n";
echo "==================================\n";
echo "Temperaturas Disponiveis: \n[1] Celsis \n[2] Fahrenheit \n[3] Kelvin\n";
$temp = readline("Insira a temperatura base: ");
echo "\n\nTemperaturas Disponiveis: \n[1] Celsis \n[2] Fahrenheit \n[3] Kelvin\n";
$convert = readline("Insira qual a temperatura de Conversão: ");
$valor = readline("Insira o valor da Temperatura: ");

if ($temp == 1)
{
    celsius();
}

if ($temp ==2 )
{
    fahrenheit();
}

if ($temp == 3)
{
    kelvin();
}
?>