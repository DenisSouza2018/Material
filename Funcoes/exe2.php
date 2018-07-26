<?php

function ola($texto,$periodo="Bom dia"){

	return "Ola $texto! $periodo ! <br>";
}

echo ola("Mundo");
echo ola("Denis","Boa noite");
echo ola("Pedrinho","Boa Tarde");
echo ola("Ana","");



?>