<?php
//Encapsulamento no PHP:


//Class:
class Pessoa{
	//Atributos:
	public $nome = "Rasmus Lerdof";
	protected $idade = 48;
	private $senha = "123456";


	//Métodos:
	public function verDados(){

		echo $this->nome."<br>";
		echo $this->idade."<br>";
		echo $this->senha."<br>";


	}


}

//Instânciar um objeto:
$objeto = new Pessoa();

//echo $objeto->senha."<br>";

$objeto->verDados();



?>