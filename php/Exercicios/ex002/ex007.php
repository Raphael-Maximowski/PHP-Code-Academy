<?php 

echo "Qualificando Categoria\n";
echo "---------------------------------\n\n";
$idade = readline("Insira sua idade: ");
echo "---------------------------------\n";

if ($idade >= 5 && $idade <= 7)
{
    echo "Categoria Infantil A\n";
}

else if ($idade >= 8 && $idade <= 10)
{
    echo "Categoria Infantil B\n";
}

else if ($idade >= 11 && $idade <= 13)
{
    echo "Categoria Junior A\n";
}

else if ($idade >= 14 && $idade <= 17)
{
    echo "Categoria: Junior B\n";
}

else if ($idade >= 18)
{
    echo "Categoria Senior\n";
}

?>
