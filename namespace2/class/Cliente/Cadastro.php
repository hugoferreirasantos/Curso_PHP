<?php

//Colocar o namespace do arquivo:
namespace Cliente;

//Class Cadastro dentro da pasta Cliente:
class Cadastro extends \Cadastro { // \("volta para pasta raiz:")

	//Método:
	public function registroVenda(){

		return "Foi registrado uma venda para o cliente ".$this->getNome();

	}

}
//Fim da Class:


?>