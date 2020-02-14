<?php

//Criado por José Augusto Chaves Izabel

//13/02/2020

//Código criado com a intenção de testar o efeito do "strtolower".

$Nome = "JOSE AUGUSTO CHAVES IZABEL";

echo '<strong>Impressão da variável "$Nome", antes de passar por qualquer alteração :</strong>'."<br>\n";
echo $Nome;
echo "<br>\n";
echo "<br>\n";
echo '<strong>Impressão da variável "$Nome", após pela alteração "strtolower" :</strong>'."<br>\n";
echo strtolower($Nome);
?>