<?php

    $Hello = "Hello";
    $World = "World";
    $Ponto = "!!!";
    $HelloWorld = $Hello." ".$World." ".$Ponto;

    unset ($Hello, $Ponto);

    echo $Hello." ".$World." ".$Ponto. "<br/>\n";
    echo $HelloWorld . "<br/>\n";
    echo $World."<br/>\n";
    unset ($HelloWorld);
    echo $HelloWorld;
?>