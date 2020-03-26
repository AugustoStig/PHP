<?php

//Criado por José Augusto Chaves Izabel

//14/02/2020

//Código criado com a intenção de testar o uso "strpos" e "substr".

$Frase = "A repetição é a mãe da retenção!";

echo '<strong>Impressão da variável "$Frase", sem qualquer alteração :</strong>'."<br>\n";
echo $Frase;

//Primeiro parametrô = Qual a variável.
//Segundo parametrô = O que será procurado.

$FraseNum = strpos($Frase, "da");

echo "<br>\n";
echo '<strong>Impressão do tipo e tamanho da variável "$FraseNum", onde foi utilizado o "strpos" :</strong>'."<br>\n";

var_dump($FraseNum);

//Primeira parametrô = Qual a variável.
//Segundo parametrô = A partir de que posição. Pode se usar o "0" para pegar a frase desde o início.
//Terceiro parametrô = Até que posição.

$TextoPart = substr($Frase, 0, $FraseNum);

echo "<br>\n";
echo '<strong>Impressão da variável "$TextoPart", após passar por um "substr" :</strong>'."<br>\n";
echo $TextoPart;

//Primeiro parametrô = Qual a variável.
//Segundo parametrô = A partir de que posição.
//Terceiro parametrô = Até que posição. Ou em branco para ir até o final.

$TextoParte = substr($Frase, $FraseNum);

echo "<br>\n";
echo '<strong>Impressão da variável "$TextoParte", após passar por um "substr :"</strong>'."<br>\n";
echo $TextoParte;
?>