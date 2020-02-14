<?php

//Criado por José Augusto Chaves Izabel

//13/02/2020

//Criado com a intenção de testar o efeito do "ucwords".

$Nome = "josé augusto chaves izabel";

echo '<strong>Impressão da variável "$Nome", antes de passar por qualquer alteração :</strong>'."<br>\n";
echo $Nome;
echo "<br>\n";
echo "<br>\n";
echo '<strong>Impressão da variável "$Nome", após passar pela alteração "ucwords" :</strong>'."<br>\n";
echo ucwords($Nome);
?>