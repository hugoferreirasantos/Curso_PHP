<?php

//Colocar o namespace do arquivo:
namespace Cliente;



//Class Cadastro denho da pasta Cliente:
class Cadastro extends \Cadastro { // \("volta para pasta raiz:")

	//Métodos:
	public function registrarVenda(){

		echo "Foi registrada uma venda para o cliente ".$this->getNome();

	}

}
//Fim da Class:


?>