<?php

//Utilizar o namespace:
namespace Cliente;



//Class Cadastro da pasta Cliente:
class Cadastro  extends \Cadastro  { //arquivo que está na raís da pasta class:

	//Método:
	public function registroVenda():string{

		return "Foi registrada uma venda para o cliente  <b>".$this->getNome()."<br>";

	}

}

//Fim da Class:

?>