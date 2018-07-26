<?php

$nome = "Denis";

function teste(){// criando uma funçao

	global $nome;
	echo $nome;


}

function teste2(){
	$nome = "Ana";
	echo $nome."agora teste 2";
}

teste();
teste2();

?>