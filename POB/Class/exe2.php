<?php 

class Carro{

	private $modelo;
	private $motor;
	private $ano;

	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	public function getMotor():float{
		return $this->motor;
	}

	public function setMotor($motor){
		$this->motor = $motor;
	}

	public function getAno():int{
		return $this->ano;
	}

	public function setAno($Ano){
		$this->ano = $Ano;
	}


	public function exibir(){

		return array(
			"modelo:"=>$this->getModelo(),
			"motor:"=>$this->getMotor(),
			"ano:"=>$this->getAno()
		);

	}

}

$gol = new Carro();
$gol->setModelo("Gol");
$gol->setMotor("2.0");
$gol->setAno("1990");

var_dump($gol->exibir());




 ?>