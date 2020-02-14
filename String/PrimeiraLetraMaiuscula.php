<?php

//Criado por José Augusto Chaves Izabel

//13/02/2020

//Criado com a intenção de testar o efeito do "ucfirst".

$Texto = "lorem ipsum arcu eros netus faucibus a ac molestie, sagittis blandit tellus habitasse mauris dolor ut vivamus, nulla phasellus varius nulla 
primis est neque. feugiat erat arcu dictum donec in metus facilisis, auctor pellentesque inceptos bibendum massa ullamcorper gravida, eget fusce 
torquent dictumst curabitur vulputate. suspendisse metus sociosqu varius ultrices sem suscipit aptent dui habitasse lorem cursus, pellentesque habitant 
luctus quisque blandit tempor nostra quisque eleifend metus donec vitae, fringilla pretium suscipit facilisis pretium tellus dictumst tellus malesuada 
neque. risus massa mi tempus aenean eros per class, convallis fames quam netus mi duis habitasse, eu congue dolor elementum ornare venenatis.
";

echo '<strong>Impressão da variável "$Texto", antes de passar por qualquer alteração : </strong>'."<br>\n";
echo $Texto;
echo "<br>\n";
echo "<br>\n";
echo '<strong>Impressão da variável "$Texto", após passar pela alteração "ucfirst" : </strong>'."<br>\n";
echo ucfirst($Texto);
?>