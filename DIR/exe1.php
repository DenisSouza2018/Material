<?php 

$name = "imagens";

if(!is_dir($name)){

	mkdir($name);
	echo "Diretorio criado com sucesso ";
}else{
	rmdir($name);
	echo " Já existe o diretorio: $name foi removido";
}



 ?>