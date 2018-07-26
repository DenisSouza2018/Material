<?php 

 class Pessoa{

 	public $nome;

 	public function falar(){

 		return "Meu nome é ".$this->nome;

 	}

 }

 $Denis = new Pessoa();
 $Denis->nome = "Denis Souza";
 echo $Denis->falar();


 ?>