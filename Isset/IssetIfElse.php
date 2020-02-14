<?php

//Criado por José Augusto Chaves Izabel

//12/02/2020

/*Código com a intenção de imprimir um "Hello World!!!", porém, utilizado o "Isset", para que a variável só seja impressa caso exista, testando 
a existência da mesma.*/

$Nome = "José Augusto Chaves Izabel";
$Nascimento = 1999;

//Uso do "Isset", utilizado um "if" para que se a variável "HelloWorld" existir, imprima o que tem nela.

echo '<strong>Tentativa de impressão da variável "$Nome" e "$Nascimento" :</strong>"'."<br>\n";
echo "<br>\n";

if(isset($Nome)){
    echo $Nome."<br/>\n";
    echo "<br>\n";
    echo "<strong>Passou pelo Isset!!</strong><br>\n";
    echo '<strong>A variável $Nome existe!!</strong>';
    echo "<br>\n";
    echo "<br>\n";
    echo $Nascimento;
    echo "<br>\n";
    echo "<br>\n";
}
else{
    echo "<strong>Não passou pelo Isset!!</strong><br>\n";
    echo '<strong>A variável $Nome não existe!!</strong>';
};

echo '<strong>Tentativa de impressão da variável "$Teste :</strong>"'."<br>\n";
echo "<br>\n";

if(isset($Teste)){
    echo $Teste."<br/>\n";
    echo "<strong>Passou pelo Isset!!</strong><br>\n";
    echo '<strong>A variável $Teste existe!!</strong>';}
    else{
        echo "<strong>Não passou pelo Isset!!</strong><br>\n";
        echo '<strong>A variável $Teste não existe!!</strong>';
};
?>
