<?php

//Criado por José Augusto Chaves Izabel

//11/02/2020

//Código criado com a intenção de treinar a concatenação utilizando o ".".

$Nome = "José";
echo $Nome;
echo "<br>\n";
$Nome2 = "Augusto";
echo $Nome2;
echo "<br>\n";
$Sobrenome = "Chaves";
echo $Sobrenome;
echo "<br>\n";
$Sobrenome2 = "Izabel";
echo $Sobrenome2;
echo "<br>\n";
$Nomes = $Nome." ".$Nome2;
echo $Nomes;
echo "<br>\n";
$Sobrenomes = $Sobrenome." ".$Sobrenome2;
echo $Sobrenomes;
echo "<br>\n";
$NomeCompleto = $Nomes." ".$Sobrenomes;
echo "<strong>".$NomeCompleto."</strong>";
?>