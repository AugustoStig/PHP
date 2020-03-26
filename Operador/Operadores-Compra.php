<?php

//Criado por José Augusto Chaves Izabel

//11/02/2020

/* Código com a intenção de simular uma compra, utilizando valor inicial do caixa, o valor de cada compra, o valor da soma de ambas, e após isso, 
aplicar um vale presente, e um desconto, até chegar ao valor final da compra.*/

$ValorTotal = 0;

echo "<strong>Valor Total Inicial :</strong><br>\n";
echo $ValorTotal;
echo "<br>\n";

$ValorCompra1 = 20;

echo "<strong>Valor referente a primeira compra :</strong><br>\n";
echo $ValorCompra1;
echo "<br>\n";

$ValorCompra2 = 50;

echo "<strong>Valor rederente a segunda compra :</strong><br>\n";
echo $ValorCompra2;
echo "<br>\n";

$Valor = $ValorCompra1 + $ValorCompra2;

echo "<strong>Valor referente a soma da primeira e segunda compra :</strong><br>\n";
echo $Valor;
echo "<br>\n";

$ValorTotal += $Valor;
$ValorTotal -= 10;

echo "<strong>Valor referente a soma da primeira e segunda compra com o desconto de um vale presente de 10 reais :</strong><br>\n";
echo $ValorTotal."<br>\n";

$ValorTotal *= 0.9;

echo "<strong>Valor referente a soma da primeira e segunda compra com o desconto de um vale presente de 10 reais e um desconto adicional de 10% :</strong><br>\n";
echo $ValorTotal."<br>\n";
?>