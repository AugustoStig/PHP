<?php

//Criado por José Augusto Chaves Izabel

//11/02/2020

//Código com a intenção de imprimir um "Hello World!!!", utlizando o ".=" para fazer a alteração na variável "Hello".

$Hello = "Hello";
$Ponto = "!!!";
$Hello .= " World";

echo '<strong>Impressão das variáveis "$Hello", "$Ponto" : </strong>'."<br>\n";
echo $Hello.$Ponto;
?>