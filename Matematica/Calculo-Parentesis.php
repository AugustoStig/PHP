<?php

//Criado por José Augusto Chaves Izabel

//12/02/2020

//Código criado para testar o cálculo entre parentesis, para saber qual resultado o PHP daria.

$Calculo = 2 + 2 * 3;
$Calculo2 = (2 + 2) * 3;

echo "<strong>Resultado do cálculo : 2 + 2 * 3 = </strong><br>\n";
echo $Calculo;
echo "<br>\n";
echo "<strong>Resultado do cálculo : ( 2 + 2 ) * 3 = </strong><br>\n";
echo $Calculo2;
?>