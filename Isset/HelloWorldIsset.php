<?php

/*Código com a intenção de imprimir um "Hello World!!!", porém, utilizado o "Isset", para que a variável só seja impressa caso exista, testando 
a existência da mesma.*/

$Hello = "Hello";

$World = "World";

$Ponto = "!!!";

$HelloWorld = $Hello." ".$World.$Ponto;

//Uso do "Isset", utilizado um "if" para que se a variável "HelloWorld" existir, imprima o que tem nela.

if(isset($HelloWorld)){

    echo $HelloWorld."<br/>\n";};

echo "<strong>Passou pelo Isset:</strong><br>\n";

echo "<strong>Existe a variável!!!<strong>";
?>
