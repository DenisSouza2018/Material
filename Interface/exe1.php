<?php 

interface Veiculo{

	public function acelarar($velocidade);

	public function freiar($velocidade);

	public function trocarMarcha($marchar);

}//Fim interface

class Civic implements Veiculo{

	public function acelarar($v)
	{
		echo "O veiculo acelerou até".$v."Km/h";
	}

	public function freiar($v)
	{
		echo "velocidade de frenar ".$v."Km/h";
	}

	public function trocarMarcha($marcha)
	{
		echo "Marcha é ".$marcha;
	}


}//Fim Class

$carro = new Civic();

$carro->trocarMarcha(2);





?>