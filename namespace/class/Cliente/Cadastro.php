<?php 

namespace Cliente;

class Cadastro extends \cadastro {

	public function registrarVenda(){
		echo "Foi registrada uma venda para o Cliente".$this->getNome();
	}

}



 ?>