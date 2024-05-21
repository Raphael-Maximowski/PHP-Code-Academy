<?php

echo "Calculando tempo jogo de Xadrez . . . .\n";
echo "==============================================\n";
$time = readline("Insira qual horário o jogo iniciou: ");
$time_end = readline("Insira qual horario o jogo Terminou: ");
$time_max = $time -24;
echo "==============================================\n";
echo "Tempo Máximo: " . $time . " Horas do proximo dia!\n";
echo "Tempo restante de jogo disponivel para o mesmo dia: " . $time_max * -1 . " Horas\n";
echo "Duração total: " . (24 - $time) - (24 - $time_end) . " Horas" . "\n";
echo "==============================================\n";
