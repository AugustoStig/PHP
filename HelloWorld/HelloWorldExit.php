<?php

//Criado por José Augusto Chaves Izabel

//11/02/2020

//Código com a intenção de testar o "exit", fazendo uma impressão antes de seu uso e uma depois.

$Hello = "Hello";
$World = "World";
$Ponto = "!!!";
$HelloWorld = $Hello." ".$World." ".$Ponto;

echo $HelloWorld;

//Uso do "exit", ponto onde o código deve parar de ser executado.

exit;

echo "Teste Exit";
?>
