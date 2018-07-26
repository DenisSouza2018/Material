<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new cadastro();

$cad->setNome("Denis Souza da Rosa");
$cad->setEmail("denis@gmail.com");
$cad->setSenha("12548");

$cad->registrarVenda();

 ?>