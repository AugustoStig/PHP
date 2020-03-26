<?php

//Criado por José Augusto Chaves Izabel

//12/02/2020

//Código criado para testar o uso do "||".

$Calculo = 2 * 3 > 5 || 7 + 2 == 9;

echo "<strong>(2*3) é igual maior que 5? Ou (7+2) é igual á 9?</strong><br>\n";

var_dump($Calculo);

echo "<br>\n";

$Calculo2 = 2 * 3 > 5 || 7 + 2 == 10;

echo "<strong>(2*3) é maior que 5? Ou (7+2) é igual á 10?</strong><br>\n";

var_dump($Calculo2);
?>