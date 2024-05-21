<?php 

$valor = readline ("Insira o valor do Produto: ");
echo "\nCalculando reajuste de 1% . . .\n";
echo "Valor com reajuste: " . (($valor / 100) * 1) + $valor;

?>