<?php

$num = readline("Insira um numero: ");
echo "\n";

function multiplo_quatro($num)
{
    static $condicao = false;
    if ( $num % 4 == 0)
    {
        $condicao = 'true';
        echo "Multiplo de 4: Condição Verdadeira\n\n";
    }
    else {
        echo "Multiplo de 4: Condição Falsa\n\n";
    }

    
}

multiplo_quatro($num);

function par_impar($num)
{
    static $condicao = false;
    if ($num % 2 == 0)
    {
        $condicao = true;
        echo "Numero PAR: Condição Verdadeiro\n\n";
    }
    else {
        echo "Numero Impar: Condição Verdadeiro\n\n";
    }
    echo "=================================\n\n";
}

par_impar($num);

function soma_entre_numeros()
{
    $numeros[0] = readline("Insira um numero: ");
    $numeros[1] = readline("Insira outro numero: ");
    
    $contador_soma = 0;
    for ($i = min($numeros); $i <= max($numeros) -1 ; $i++)
    {
        $contador_soma += $i;
        global $contador_soma;
    }

    echo "Soma de numeros entre: " . min($numeros) . " e " . max($numeros) . " = " . $contador_soma . "\n\n";
    echo "=================================\n\n";

}

soma_entre_numeros();

function divisor_soma()
{
    $divisor = (int) readline("Insira o numero como multiplo: ");
    $numeros1[0] = (int) readline("Insira um numero para a Operação: ");
    $numeros1[1] = (int) readline("Insira Outro numero para a Operação: ");

    $contador_final = 0;
    for($i = min($numeros1); $i <= max($numeros1); $i++)
    {
        if ($i % $divisor == 0)
        {
            $contador_final += $i;
        }
    }

    echo "Contador dos valores entre " . min($numeros1) . " e " . max($numeros1) . " multiplos de " . $divisor . " = " . $contador_final . "\n\n";

    echo "=================================\n\n";
}

divisor_soma();

function peso_ideal()
{
    echo "Qual seu Sexo:\n";
    echo "[1] Masculino \n[2]Feminino\n";
    $sexo = readline("Insira seu caso: ");
    $altura = readline("Insira sua altura: ");

    if ($sexo == 1)
    {
        $ideal = (72.7 * $altura) - 58;
        echo "Peso Ideal: $ideal\n"; 
        echo "=================================\n\n";
    }

    else if ($sexo == 2)
    {
        $ideal = (62.1 * $altura) - 44.7;
        echo "Peso Ideal: $ideal\n"; 
        echo "=================================\n\n";
    }
}

peso_ideal();

?>

