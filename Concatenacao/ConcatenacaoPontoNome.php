<?php

//Criado por José Augusto Chaves Izabel

//11/02/2020

//Código criado com a intenção de treinar a concatenação utilizando o ".".

$Nome = "José";

echo '<strong>Impressão da variável $Nome :</strong>'."<br>\n";
echo $Nome;
echo "<br>\n";

$Nome2 = "Augusto";

echo '<strong>Impressão da variável $Nome2 :</strong>'."<br>\n";
echo $Nome2;
echo "<br>\n";

$Sobrenome = "Chaves";

echo '<strong>Impressão da variável $Sobrenome :</strong>'."<br>\n";
echo $Sobrenome;
echo "<br>\n";

$Sobrenome2 = "Izabel";

echo '<strong>Impressão da variável $Sobrenome2 :</strong>'."<br>\n";
echo $Sobrenome2;
echo "<br>\n";

$NomeCompleto = $Nome." ".$Nome2;

echo '<strong>Impressão da variável $NomeCompleto :</strong>'."<br>\n";
echo $NomeCompleto;
echo "<br>\n";

$SobrenomeCompleto = $Sobrenome." ".$Sobrenome2;

echo '<strong>Impressão da variável $SobrenomeCompleto :</strong>'."<br>\n";
echo $SobrenomeCompleto;
echo "<br>\n";

$NomeCompleto = $NomeCompleto." ".$SobrenomeCompleto;

echo "<strong>Impressão do nome completo do usuário :</strong><br>\n";
echo $NomeCompleto;
?>