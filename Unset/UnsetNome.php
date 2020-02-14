<?php

//Criado por José Augusto Chaves Izabel

//12/02/2020

//Código criado com o objetivo de apagar o conteúdo de duas variáveis, após dar valores a elas e imprimi-las.

$Nome = "José";
$Nome2 = "Augusto";
$Sobrenome = "Chaves";
$Sobrenome2 = "Izabel";

echo '<strong>Impressão das variáveis "$Nome", "$Nome2", "$Sobrenome", "$Sobrenome2" :</strong>'."<br>\n";
echo "<br>\n";
echo "$Nome $Nome2 $Sobrenome $Sobrenome2";
echo "<br>\n";

unset($Nome, $Nome2);

echo '<strong>Tentativa de impressão das variáveis "$Nome", "$Nome2", "$Sobrenome" e "$Sobrenome2 (Erro) : </strong>"'."<br>\n";
echo "$Nome $Nome2 $Sobrenome $Sobrenome2";

$Nome = $Sobrenome;
$Nome2 = $Sobrenome2;

echo "<br>\n";
echo '<strong>Impressão da variável "$Nome" :</strong>'."<br>\n";
echo $Nome;
echo "<br>\n";
echo '<strong>Impressão da variável "$Nome2" :</strong>'."<br>\n";
echo $Nome2;
echo "<br>\n";
echo '<strong>Impressão das variáveis "$Nome", "$Nome2", "$Sobrenome" e "$Sobrenome2" :</strong>'."<br>\n";
echo "$Nome $Nome2 $Sobrenome $Sobrenome2";
?>