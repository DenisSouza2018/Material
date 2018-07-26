<?php 

class Documento{

	private $numero;


	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($n){
		$this->numero = $n;
	}


}//Fim Class

class CPF extends Documento{

	public function validar():bool{

		$numeroCPF = $this->getNumero();

		return true;
	}
}//Fim Class


$doc = new CPF();

$doc->setNumero("125458");

var_dump($doc->validar());

echo "<br/>";

echo $doc->getNumero();



?>