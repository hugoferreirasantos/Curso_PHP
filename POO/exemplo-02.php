<?php
// Atributos e Métodos:

class Carro{
	//Atributos:
	private $modelo;
	private $motor;
	private $ano;

	//Métodos:
	public function getModelo(){

		return $this->modelo;
	}

	public function setModelo($modelo){

		$this->modelo = $modelo;
	}

	public function getMotor():float{ //Vai receber uma string e retorna um Float:

		return $this->motor;
	}

	public function setMotor($motor){

		$this->motor = $motor;
	}

	public function getAno():int{ //Vai receber uma string e retornar um inteiro:

		return $this->ano;
	}

	public function setAno($ano){ 

		$this->ano = $ano;
	}

	//Método de Exibição:
	public function exibir(){

		return array(
			"Modelo"=>$this->getModelo(),
			"Motor"=>$this->getMotor(),
			"Ano"=>$this->getAno()
		);
	}


}

//Instânciar a Class:
$gol = new Carro();

//Atribuindo valores aos Métodos SET:
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

//Exibir o resultado da inserção de valores:
//print_r($gol->exibir());

var_dump($gol->exibir());


?>