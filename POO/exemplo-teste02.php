<?php
// Métodos mágicos:

//Class:
class Carro{
	//Atributos:
	private $modelo;
	private $motor;
	private $ano;

	//Métotos Mágicos:
	public function __construct($a,$b,$c){

		$this->modelo = $a;
		$this->motor = $b;
		$this->ano = $c;
	}

	public function __destruct(){ //Método mágico usado para liberar mémoria:
		//var_dump("DESTRUIR");
	}

	public function __toString(){ //Método mágico usado para transformar ou fazer conferções para String:
		return $this->modelo.", ".$this->motor." - ".$this->ano;
	}


}

//Instânciar um objeto:
$camaro = new Carro("Camaro","3.6","2017");
//var_dump($camaro);

echo "<br>";
//unset($camaro);

echo $camaro;



?>