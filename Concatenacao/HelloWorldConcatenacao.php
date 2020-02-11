<?php

/*Código com a finalidade de imprimir "Hello World!!!", mas com cada parte separada em uma variável, e ao final serão unidas por uma terceira variável, 
que terá a função de imprimir "Hello World!!!".*/

$Hello = "Hello";

echo $Hello."<br>\n";

$World = "World";

echo $World."<br>\n";

$Ponto = "!!!";

echo $Ponto."<br>\n";

$HelloWorld = "<strong>".$Hello." ".$World.$Ponto."</strong>";

echo $HelloWorld;

?>
