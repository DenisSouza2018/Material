<?php

$nome = (int)$_GET["a"];

//var_dump($nome);

$ip1 = $_SERVER["REMOTE_ADDR"];// Pega informaçao do ambiente IP -REMOTE_ADDR
$ip2 = $_SERVER["SCRIPT_NAME"];// Pega caminho de acesso

echo $ip1;
echo "<br/>";
echo $ip2;


?>