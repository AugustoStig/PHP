<?php

//Criado por José Augusto Chaves Izabel

//11/02/2020

//Código com a intenção de imprimir a variável "HelloWorld", primeiramente com informação, e depois com erro, pois terá sido apagada.

$Hello = "Hello World!!!";

echo $Hello."<br>\n";

//Uso do "Unset", o que apagará o conteúdo da variável.

unset ($Hello);

echo "<strong>Erro após a variável 'Hello' ser apagada:</strong><br>\n";
echo $Hello;
?>
