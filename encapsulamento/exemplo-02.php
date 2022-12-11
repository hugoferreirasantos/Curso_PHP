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

//Class:
class Programador extends Pessoa {


	//Métodos:
	public function verDados(){

		echo get_class($this)."<br>"; //Função que retorna quem está instânciando essa class:

		echo $this->nome."<br>";
		echo $this->idade."<br>";
		echo $this->senha."<br>";


	}

}


//Instânciar um objeto:
$objeto = new Programador();

//echo $objeto->senha."<br>";

$objeto->verDados();

?>