<?php

$produto = array("Produto 1", "Produto 2", "Produto 3");
$quantidade = array(0 , 0, 0);
$price = array(15.99, 9.99, 14,99);
$quantidade_total = $quantidade[0] +  $quantidade[1]+ $quantidade[2];
$price_total = ($quantidade[0] *  $price[0]) + ($quantidade[1] *  $price[1]) + ($quantidade[2] *  $price[2]);
$media_price = $price_total / $quantidade_total; 
$escolha = 0;
$interacao = 0;
$posicao;
echo "Mercadorias disponiveis . . .\n";

while ($escolha != 4)
{
    echo "=============================================================================\n";
    echo $produto[0] . "   - Quantidade: " . $quantidade[0] . "   - Preço: R$" . $price[0] . "\n";
    echo $produto[1] . "   - Quantidade: " . $quantidade[1] . "   - Preço: R$" . $price[1] . "\n";
    echo $produto[2] . "   - Quantidade: " . $quantidade[2] . "   - Preço: R$" . $price[2] . "\n";
    echo "=============================================================================\n";
    echo "[1] Cadastrar Quantidade \n";
    echo "[2] Cadastrar Preço \n";
    echo "[3] Conferir Estoque\n";
    echo "[4] Sair\n";
    $escolha = readline("Insira sua escolha: ");
    echo "=============================================================================\n";
    system("cls");

        if ($escolha == 1)
        {
            echo "Deseja Cadastrar Quantidade de Qual produto?\n";
            echo "[1] Produto 1\n";
            echo "[2] Produto 2\n";
            echo "[3] Produto 3\n";
            $posicao = readline("Insira sua escolha: ");
    
            $quantidade[$posicao -1] = readline("Insira quantidade de " . $produto[$posicao -1] . " que serão cadastrados: ");
            echo "Log Cadastrada! \n";
            system("cls");
        }

        if ($escolha == 2)
        {
            echo "Deseja Cadastrar o Preço de Qual produto?\n";
            echo "[1] Produto 1\n";
            echo "[2] Produto 2\n";
            echo "[3] Produto 3\n";
            $posicao = readline("Insira sua escolha: ");

            $price[$posicao - 1] = readline("Insira o preço de " . $produto[$posicao -1] . ": R$");
            echo "Log Cadastrada! \n"; 
            system("cls");
        }

        if ($escolha == 3)
        {
            echo "TABELA ATUAL:\n";
            echo "=============================================================================\n";
            echo $produto[0] . "   - Quantidade: " . $quantidade[0] . "   - Preço: R$" . $price[0] . "\n";
            echo $produto[1] . "   - Quantidade: " . $quantidade[1] . "   - Preço: R$" . $price[1] . "\n";
            echo $produto[2] . "   - Quantidade: " . $quantidade[2] . "   - Preço: R$" . $price[2] . "\n";
            echo "=============================================================================\n";
            echo "QUANTIDADE TOTAL:\n";
            echo $produto[0] . "   - Quantidade: " . $quantidade[0] . "\n";
            echo $produto[1] . "   - Quantidade: " . $quantidade[1] . "\n";
            echo $produto[2] . "   - Quantidade: " . $quantidade[2] . "\n";
            echo "TOTAL DE ITENS: " . $quantidade_total . "\n";
            echo "=============================================================================\n";
            echo "PREÇO ATUAL: \n";
            echo $produto[0] . "   - Preço: R$" . $price[0] . "\n";
            echo $produto[1] . "   - Preço: R$" . $price[1] . "\n";
            echo $produto[2] . "   - Preço: R$" . $price[2] . "\n";
            echo "=============================================================================\n";
            echo "QUANTIDADE DE ITENS CADASTRADOS: " . $quantidade_total . "\n";
            echo "PREÇO DE MERCADORIAS TOTAL: " . $price_total . "\n";
            echo "PREÇO MEDIO POR PRODUTO: " . $media_price . "\n";
            echo "=============================================================================\n";
            system("pause");
            system("cls");
        }
}
echo "Finalizando sistema! Até a proxima . . ."; 

?>