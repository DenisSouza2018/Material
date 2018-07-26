<?php

$diaDaSemana = 8;  // date("w");

switch ($diaDaSemana) {
	case 0:
		
		echo "Domingo";
		break;
	
	case 1:
		echo "Segunda-Feira";
		break;
	
	case 2:
		
		echo "Terça";
		break;
	
	case 3:
		echo "Quarta-Feira";
		break;


	case 4:
		
		echo "Quinta";
		break;
	
	case 5:
		echo "Sexta-Feira";
		break;

	default:
		
		echo "Dia Invalido !";
		break;
}




?>