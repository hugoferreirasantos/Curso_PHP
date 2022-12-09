<?php
// Criando uma Classe no PHP:

//Classe:
class Pessoa{
	//Atributos:
	public $nome;

	//Métodos:
	public function falar(){

		return "O meu nome é ".$this->nome;
	}

}

//Instânciar um objeto:

$glaucio = new Pessoa();

//Atribuir um valor ao atributo:
$glaucio->nome = "Glaucio Daniel";

//Acessando o método do Ojeto:
echo $glaucio->falar();
?>