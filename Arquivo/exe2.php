<?php

//include "exe1.php"; // Traz o arquivo mesmo se o mesmo nao funcionar direito

//require "inc/exe1.php"; // traz o arquivo apenas se o mesmo existir e estiver funcionando corretamente


require_once "inc/exe1.php"; // Indem do require mas com a difereça de que mesmo que o arquivo estiver aberto inumeras vezes ele só chama uma vez !


$resultado = soma(10,20);

echo $resultado;

?>