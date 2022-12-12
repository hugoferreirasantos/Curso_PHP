<?php
//Polimorfismos no PHP:

//Class abstrata:
abstract class Animal{

	//Métodos:
	public function falar(){

		return "Som";

	}

	public function mover(){

		return "Anda";
	}

}
//Fim da Class abstrata:

//Class Cachorro:
class Cachorro extends Animal{

	//Método:
	public function falar(){

		return "Late";
	}

}
//Fim da Class Cachorro:

//Class Gato:
class Gato extends Animal{

	//Método:
	public function falar(){

		return "Mia";
	}

}
//Fim da Class Gato:

//Class Passaro:
class Passaro extends Animal{

	//Método:
	public function falar(){

		return "Canta";
	}

	public function mover(){

		return "Voa e ".parent::mover(); // Fazendo a chamada do método que está na class pai: 
	}

}
//Fim da Class Passaro:


//-------------------------------------------------------------------------------------------------------------
//Instânciar um objeto:
$pluto = new Cachorro();
//Fim da instanciação:

//Chamar um método da função:
echo $pluto->falar()."<br>";
echo $pluto->mover()."<br>";
//Fim da chamada:
echo "------------------------------------------------<br>";
//-------------------------------------------------------------------------------------------------------------

//Instânciar um objeto:
$garfield= new Gato();
//Fim da instanciação:

//Chamar um método da função:
echo $garfield->falar()."<br>";
echo $garfield->mover()."<br>";
//Fim da chamada:
echo "--------------------------------------------------<br>";
//-----------------------------------------------------------------------------------------------------------

//Instânciar um objeto:
$ave = new Passaro();
//Fim da instanciação

//Chamar um método da função:
echo $ave->falar()."<br>";
echo $ave->mover()."<br>";
//Fim da chamada:


?>