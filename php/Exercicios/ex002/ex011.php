<?php

$jogador_name = array("Jogador 1", "Jogador2 ", "Jogador 3");
$jogador_escolha = array(0 , 0 , 0);
$impar = 1;
$par = 1;

echo "---------------------------------------------------------------------\n";
echo "Insira o nome dos jogadores: \n";
$jogador_name[0] = readline("Insira o nome do Jogador 01: ");
$jogador_name[1] = readline("Insira o nome do Jogador 02: ");
$jogador_name[2] = readline("Insira o nome do Jogador 03: ");
echo "---------------------------------------------------------------------\n";
$jogador_escolha[0] = readline( $jogador_name[0] . " - Insira sua escolha [2] ou [1]: ");
$jogador_escolha[1] = readline( $jogador_name[1] . " - Insira sua escolha [2] ou [1]: ");
$jogador_escolha[2] = readline( $jogador_name[2] . " - Insira sua escolha [2] ou [1]: ");
echo "---------------------------------------------------------------------\n";

if ($jogador_escolha[0] != $jogador_escolha[1] && $jogador_escolha[0] != $jogador_escolha[2]) 
{
    $jogador_escolha[0] = 0;
} 

else if ($jogador_escolha[1] != $jogador_escolha[0] && $jogador_escolha[1] != $jogador_escolha[2]) 
{
    $jogador_escolha[1] = 0;
} 

else if ($jogador_escolha[2] != $jogador_escolha[0] && $jogador_escolha[2] != $jogador_escolha[1]) 
{
    $jogador_escolha[2] = 0;
}


for ($i = 0; $i <= 2; $i++)
{
    if ($jogador_escolha[$i] == 0)
    {
        echo $jogador_name[$i] .  " Perdeu!\n";
    }
}

echo "---------------------------------------------------------------------\n";


$contador = 0;
$par = 1;
$impar = 1;
$jogada = array(0,0);

for ($i = 0; $i <= 2; $i++)
{
        if ($jogador_escolha[$i] != 0)
    {   
        $jogador_escolha[$i] = readline("Insira sua escolha " . $jogador_name[$i] . " [0] PAR [1] IMPAR: ");
        $jogada[$i] = readline ("Insira sua jogada [0 - 10]: ");
    }
}




?>