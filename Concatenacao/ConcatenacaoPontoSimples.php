<?php

//Criado por José Augusto Chaves Izabel

//11/02/2020

/*Código com a intenção de imprimir o "Hello World!!!" de duas maneiras diferentes, uma palavra por variável, separadas por um "<br>\n", 
e depois juntas em uma única variável que terá a função de imprimir Hello World!!!*/

$Hello = "Hello";

echo "<strong>".$Hello."</strong>"."<br>\n";

$World = "World";

echo "<strong>".$World."</strong>"."<br>\n";

$Ponto = "!!!";

echo "<strong>".$Ponto."</strong>"."<br>\n";
echo $Hello." ".$World." ".$Ponto;
?>
