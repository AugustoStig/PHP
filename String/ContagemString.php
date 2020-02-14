<?php

//Criado por José Augusto Chaves Izabel

//14/02/2020

//Código criado para estudar o uso do "substr" e "strlen".

$Frase = "A repetição é a mãe da retenção!";

echo '<strong>Impressão da variável "$Frase", sem nenhuma alteração :</strong>'."<br>\n";
echo $Frase;
echo "<br>\n";

$Palavra  = "da";
$Contagem = strpos($Frase, $Palavra);

//Primeiro parâmetro = Qual a variável.
//Segundo parâmetro = A partir de qual posição.
//Terceiro parâmetro = Até qual posição.

$TextoPart = substr($Frase, $Contagem+strlen($Palavra), strlen($Frase));

echo '<strong>Impressão da variável "$TextoPart", após um alteração usando o "TextoPart" :</strong>'."<br>\n";
echo $TextoPart;
?>