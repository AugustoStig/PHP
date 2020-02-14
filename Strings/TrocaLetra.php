<?php

//Criado por José Augusto Chaves Izabel

//14/02/2020

//Código criado para testar a função do "str_replace".

$Nome = "José Augusto Chaves Izabel";

echo '<strong>Impressão da variável "$Nome", sem nenhuma alteração :</strong>'."<br>\n";
echo $Nome;
echo "<br>\n";

//Primeiro parametrô = O que será alterado.
//Segundo parametrô = Pelo que será alterado.
//Terceiro parametrô = Em qual variável está.

$Nome  = str_replace("é", "3", $Nome);

echo '<strong>Impressão da variável "$Nome", após uma alteração usando o "str_replace" :</strong>'."<br>\n";
echo $Nome;
?>