<?php
//Utilizano o autoloa do PHP:

function incluirClasses($nomeClass){

	if(file_exists($nomeClass.".php") === true){

		require_once($nomeClass.".php");
	}
	

}


spl_autoload_register("incluirClasses"); // faz um pesquisa por classes ou funções mais profunda:
spl_autoload_register(function($nomeClass){

	if(file_exists("Abstratas". DIRECTORY_SEPARATOR .$nomeClass.".php") === true){

		require_once("Abstratas". DIRECTORY_SEPARATOR .$nomeClass.".php");
	}

});


//Instanciando um objeto:
$carro = new DelRey();
//Fim da instanciação:

//Chamada de métodos:
$carro->acelerar(80);
//Fim da chamada:

?>