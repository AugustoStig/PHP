<?php

//Criado por José Augusto Chaves Izabel

//13/02/2020

//Código criado com a intenção de testar o efeito do "strtoutupper".

$Nome = "jose augusto chaves izabel";

echo '<strong>Impressão da variável "$Nome", antes de passar por qualquer transformação :</strong>'."<br>\n";
echo $Nome;
echo "<br>\n";
echo "<br>\n";
echo '<strong>Impressão da variável "$Nome", após passar por uma transformação, o uso do "strtoupper" :</strong>'."<br>\n";
echo strtoupper($Nome);
?>