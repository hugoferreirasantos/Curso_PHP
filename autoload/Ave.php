<?php

//Subclass Ave de Animal:
class Ave extends Animal{

	//Método:
	public function falar(){

		return "Canta";
	}

	public function mover(){

		return "Voa e ".parent::mover();
	}

}
//Fim da subclass:




?>