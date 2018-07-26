<?php

$nome = " Denis Souza da Rosa";
echo $nome."<br/>";

$nome = strtoupper($nome); // Coloca todas as letra em Maiusculo mas nao pode ter caracter especial
echo $nome."<br/>";

$nome = strtolower($nome);// Coloca todas as letra em minusculo mas nao podendo ter caracter especial
echo $nome."<br/>";

$nome = ucwords($nome);// Primeira letra de cada palavra deixa maiusculo
echo $nome."<br/>";



?>