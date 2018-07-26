<?php

$pessoas = array();

array_push($pessoas,array(

	'nome'=> 'Joao',
	'Idade'=> '35'

));

array_push($pessoas,array(

	'nome'=> 'Denis',
	'Idade'=> '58'

));


echo json_encode($pessoas);



?>