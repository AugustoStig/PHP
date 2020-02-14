<?php

//Criado por José Augusto Chaves Izabel

//12/02/2020

//Código criado com a intenção de testar o "??", sendo usado pra pular variáveis nulas.

$Valor1 = NULL;
$Valor2 = NULL;
$Valor3 = 23;
$Valor4 = 72;

echo '<strong>Impressão da primeira variável valorada dentre as "$Valor1", "$Valor2", "$Valor3", "$Valor4 :"</strong>'."<br>\n";
echo $Valor1 ?? $Valor2 ?? $Valor3;
?>