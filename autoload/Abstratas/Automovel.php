<?php

//Interface:

interface Veiculo {

	//Métodos da Interface:
	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocaMarcha($marcha);

}



abstract class Automovel implements Veiculo { // para inplementar outras interfaces basta colocar "," e o nome da interface:

	//Métodos da class:
	public function acelerar($vel){ // O nome do parâmetro não precisa ser igual ao da interface:

		echo "O veículo acelerou até ".$vel." Km/h";

	}

	public function frenar($velocidade){

		echo "O veículo frenou até ".$vel." Km/h";

	}

	public function trocaMarcha($marcha){

		echo "O veículo engatou a marcha ".$marcha;

	}

}


?>