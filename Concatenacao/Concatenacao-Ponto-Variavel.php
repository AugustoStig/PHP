<?php

//Criado por José Augusto Chaves Izabel.

//11/02/2020

/*Código com a finalidade de imprimir "Hello World!!!", mas com cada parte separada em uma variável, e ao final serão unidas por uma terceira variável, 
que terá a função de imprimir "Hello World!!!".*/

$Hello = "Hello";

echo '<strong>Impressão da variável $Hello :</strong>'."<br>\n";
echo $Hello."<br>\n";

$World = "World";

echo '<strong>Impressão da variável $World :</strong>'."<br>\n";
echo $World."<br>\n";

$Ponto = "!!!";

echo '<strong>Impressão da variável $Ponto :</strong>'."<br>\n";
echo $Ponto."<br>\n";

$HelloWorld = $Hello." ".$World.$Ponto;

echo '<strong>Impressão da variável $HelloWorld :</strong>'."<br>\n";
echo $HelloWorld;
?>
