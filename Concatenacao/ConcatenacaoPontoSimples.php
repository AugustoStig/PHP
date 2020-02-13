<?php

//Criado por José Augusto Chaves Izabel

//11/02/2020

/*Código com a intenção de imprimir o "Hello World!!!" de duas maneiras diferentes, uma palavra por variável, separadas por um "<br>\n", 
e depois juntas em uma única variável que terá a função de imprimir Hello World!!!*/

$Hello = "Hello";

echo '<strong>Impressão da variável "$Hello" :</strong>'."<br>\n";
echo $Hello."<br>\n";

$World = "World";

echo '<strong>Impressão da variável "$World" :</strong>'."<br>\n";
echo $World."<br>\n";
echo '<strong>Impressão da variável "$Ponto" :</strong>'."<br>\n";

$Ponto = "!!!";

echo $Ponto."<br>\n";
echo '<strong>Impressão da junção das variáveis "$Hello","$World","$Ponto" :</strong>'."<br>\n";
echo $Hello." ".$World." ".$Ponto;
?>
