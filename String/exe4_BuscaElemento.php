<?php

$frase = "tudo na vida não se perde, tudo se transforma !";

$palavra = "perde";

$encontrado = strpos($frase, $palavra); //Retorna a posiçao que se encontra o elemento buscado ! 
var_dump($encontrado);
echo "<br/>";
$texto = substr($frase,0,$encontrado);
var_dump($texto);

echo "<br/>";
$texto2 = substr($frase, $encontrado + strlen($palavra),strlen($frase));
var_dump($texto2);

?>