<?php 

function __autoload($nomeClasse){

	var_dump($nomeClasse);
	require_once("$nomeClasse.php");
	
}

//require_once("DellRey");

$carro = new DelRey();

$carro->acelerar(80);


?>