<?php

//Criado por José Augusto Chaves Izabel

//12/02/2020

//Código criado com a intenção de testar as três saídas possíveis usando o "var_dump" para comparar duas variaveís.

$Valor1 = 10;
$Valor2 = 20;
$Valor3 = 15;
$Valor4 = 15;
$Valor5 = 50;
$Valor6 = 25;

echo "<strong>Valor 1 =</strong> $Valor1.<br>\n";
echo "<strong>Valor 2 =</strong> $Valor2.<br>\n";
echo "<strong>Valor 3 =</strong> $Valor3.<br>\n";
echo "<strong>Valor 4 =</strong> $Valor4.<br>\n";
echo "<strong>Valor 5 =</strong> $Valor5.<br>\n";
echo "<strong>Valor 6 =</strong> $Valor6.<br>\n";
echo "<strong>$Valor1 é maior que $Valor2?</strong><br\n>";

var_dump($Valor1<=>$Valor2);

echo "<br>\n";
echo "<strong>$Valor3 é maior que $Valor4?</strong><br>\n";

var_dump($Valor3<=>$Valor4);

echo "<br>\n";
echo "<strong>$Valor5 é maior que $Valor6?</strong><br>\n";

var_dump($Valor5<=>$Valor6);

echo "<br>\n";
echo "<strong>Legenda:</strong><br>\n";
echo "Caso o primeiro seja maior que o segundo, resulta em: <strong>-1.</strong><br>\n";
echo "Caso os dois sejam iguais, resulta em: <strong>0.</strong><br>\n";
echo "Caso o segundo seja maior que o primeiro, resulta em:<strong> 1.</strong><br\n>";
?>