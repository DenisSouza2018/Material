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


$objeto = new Pessoa();
//echo $objeto->idade."<br/>";


$objeto->verDados();

 ?>