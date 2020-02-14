<?php

//Criado por José Augusto Chaves Izabel

//13/02/2020

//Código criado para fazer a comparação do uso do "strtoupper" e "strtolower".

$Nome = "Jose Augusto Chaves Izabel";
$NomeMaiusculo = strtoupper($Nome);
$NomeMinusculo = strtolower($Nome);

echo '<strong>Impressão da variável "$Nome", antes de passar por qualquer alteração :</strong>'."<br>\n";
echo $Nome;
echo "<br>\n";
echo "<br>\n";
echo '<strong>Impressão da variável "$NomeMaiusculo", a variável "$Nome" após pasar por um "strtoupper" :</strong>'."<br>\n";
echo $NomeMaiusculo;
echo "<br>\n";
echo "<br>\n";
echo '<strong>Impressão da variável "$NomeMinusculo", a variável "$Nome" após pasar por um "strtlower" :</strong>'."<br>\n";
echo $NomeMinusculo;
?>