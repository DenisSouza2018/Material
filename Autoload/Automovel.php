<?php 


interface Veiculo{

	public function acelerar($velocidade);

	public function freiar($velocidade);

	public function trocarMarcha($marchar);

}//Fim interface

abstract class Automovel implements Veiculo{

	public function acelerar($v)
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




 ?>