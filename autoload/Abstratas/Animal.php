<?php

//Interface:
interface Comportamento{

	//Métodos da interface:
	public function falar();
	public function mover();

}
//Fim da interface:




// Class Abstrata Animal:
abstract class Animal implements Comportamento{

	//Métodos:
	public function falar(){

		return "Som";
	}

	public function mover(){

		return "Anda";
	}

}

//Fim da Class:





?>