<?php
// Encapsulamento no PHP exercício:

//Class:
class Pessoa{
	//Atributos:
	public $nome = "Maria";
	protected $idade = 25;
	private $senha = "123456";

	//Métodos:
	public function setNome($nome){
		$this->nome = $nome;
	}

	public function setIdade($idade){
		$this->idade = $idade;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function verDados(){

		echo $this->nome."<br>";
		echo $this->idade."<br>";
		echo $this->senha."<br>";
	}

	


}

//Class:
class Trabalhador extends Pessoa{

	//Método:
	public function verDados(){

		echo $this->nome."<br>";
		echo $this->idade."<br>";
		echo $this->senha."<br>"; // não é herdada da classe Pessoa:
	}

}


//Instânciar um objeto:
$objeto = new Trabalhador();

$objeto->setNome("Mario");
$objeto->setIdade(30);
$objeto->setSenha("1234567");

$objeto->verDados();


?>