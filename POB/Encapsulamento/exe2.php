<?php 
/**
 * 
 */
class Pessoa
{
	
	public $nome = "Denis Souza";
	protected $idade = 26;
	private $senha = "12548";

	public function verDados()
	{
		echo $this->nome."<br/>";
		echo $this->idade."<br/>";
		echo $this->senha."<br/>";
	}
}//Fim Class

class Programador extends Pessoa{

	public function verDados()
	{

		echo get_class($this)."<br/>";

		echo $this->nome."<br/>";
		echo $this->idade."<br/>";
		echo $this->senha."<br/>";
	}


}


$objeto = new Programador();
//echo $objeto->idade."<br/>";


$objeto->verDados();

 ?>