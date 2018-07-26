<?php

$anoNascimento = 1990;

$nomeCompleto = " Denis Souza da Rosa";

$nome1 = "Denis ";


echo $nome1;



if(isset($nome1)){//isset verifica se a variavel existe 

	echo "<br/> Variavel existe";
}


//unset($nome1); // Apaga variavel 


if(!isset($nome1)){//isset verifica se a variavel existe 

	echo "<br/> Variavel  Nao existe";
}

$sobrenome = "Souza";
$nomeCompleto = $nome1.$sobrenome; // concatenaçao juntando variais PHP usa o ponto
echo "<br/>";
echo  $nomeCompleto;

// 


?>