<?php 
$array;
$_negativo_positivo_impar_par = [0, 0, 0, 0];
$contador = 0;
while($contador != 10)
{
    $num = readline("Insira um numero: ");
    $array[$contador] = $num;
    $contador++;

    if ($array[$contador] < 0)
    {
        $_negativo_positivo_impar_par[0]++;
    }
    if ($array[$contador] > 0)
    {
        $_negativo_positivo_impar_par[1] = $_negativo_positivo_impar_par[1]++;
    }
    if ($array[$contador] % 2 == 0)
    {
        $_negativo_positivo_impar_par[2] = $_negativo_positivo_impar_par[2]++;    
    }
    else 
    {
        $_negativo_positivo_impar_par[3] = $_negativo_positivo_impar_par[3]++; 
    }
}

echo "Quantidade Numeros negativos: $_negativo_positivo_impar_par[0]\n";
echo "Quantidade Numeros positivos: $_negativo_positivo_impar_par[1]\n";
echo "Quantidade Numeros impares: $_negativo_positivo_impar_par[2]\n";
echo "Quantidade Numeros pares: $_negativo_positivo_impar_par[3]\n";

print_r($array);

?>