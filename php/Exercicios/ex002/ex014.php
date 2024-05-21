<?php 

$salario_min = 1320;
$porcentagem = array(50, 5);

echo "Calculando Salario . . .\n";
echo "----------------------------------------\n";
$horas = readline("Insira as horas trabalhadas no Mês: ");
echo "----------------------------------------\n";

$horario_base = 160;
$valor_hora = $salario_min / $horario_base;

if ($horas > 160)
{
    $numero_HorasExtras = $horas - $horario_base;
    $valor_horaExtra = $valor_hora + (($valor_hora / 100) * $porcentagem[0]);
    echo "Numero de Horas Extras: " . $numero_HorasExtras . "\n";
    echo "Valor Adicional por hora extra: R$" . $valor_horaExtra . "\n";
    echo "Valor Horas Extras: R$" . $numero_HorasExtras * $valor_horaExtra . "\n"; 
}

else if ($horas == 160)
{
    echo "Salario Base Completo: R$" . $salario_min . "\n";
}

else 
{
    echo "Saldo de Horas Devedor\n";
    echo "Horas Negativas: " . $horario_base - $horas . "\n";
    $desconto = ($salario / 100) * $porcentagem[1];
    echo "Salario total: " . $salario - $desconto . "\n";
}



?>