<?php

$qualASuaIdade = 125;

$idadeCrianca = 12;
$indadeMaior = 18;
$indadeMelhor = 65;


if($qualASuaIdade < $idadeCrianca){

	echo "Criança";

}else if($qualASuaIdade < $indadeMaior){

	echo "Adolecente";
}else if($qualASuaIdade <$indadeMelhor){

	echo "Adulto";
}else{

	echo "Idoso";
}

echo"<br>";

echo ($qualASuaIdade < $indadeMaior)?"Menor de Idade":"Maior de Idade";

?>