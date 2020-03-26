<?php

//Criado por José Augusto Chaves Izabel

//11/02/2020

//Código com a intenção de testar o "exit", fazendo uma impressão antes de seu uso e uma depois.

$Hello = "Hello";
$World = "World";
$Ponto = "!!!";
$HelloWorld = $Hello." ".$World." ".$Ponto;

echo '<strong>Impressão da variável "$HelloWorld"</strong>'."<br>\n";
echo $HelloWorld;
echo "<br>\n";
echo "<br>\n";
echo '<strong>Restante do código não impresso pelo uso do "exit".</strong>';

exit;

echo "Teste Exit";
?>
