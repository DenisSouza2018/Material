<?php 

$data = array(
	"empresa"=>"Hcore treino"
);

setcookie("NOME_DO_COOKIE",json_encode($data),time()+3600);

echo "ok";


 ?>