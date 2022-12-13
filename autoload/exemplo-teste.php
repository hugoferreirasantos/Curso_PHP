<?php
//Exércicio utilizando o autoload do PHP:

//Função de inclusão de classes:
function incluirClasses($nomeClasse){

	if(file_exists($nomeClasse.".php") === true){

		require_once($nomeClasse.".php");

	}

}

//Fim da função de inclusão de classes:

//Utilizando a função spl_autoload_register():

spl_autoload_register("incluirClasses");

spl_autoload_register(function($nomeClass){

	if(file_exists("Abstratas". DIRECTORY_SEPARATOR .$nomeClass.".php") === true){

		require_once("Abstratas". DIRECTORY_SEPARATOR .$nomeClass.".php");
	}

});




//Fim da Função spl_autoload_register():

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//Instânciar um objeto Cachorro:
$cachorro = new Cachorro();
//Fim da instancia do objeto Cachorro:

//Chamada dos Métodos:
echo $cachorro->falar();
echo "<br>";
echo $cachorro->mover();
echo "<br>";
echo "--------------------------------------------------------------<br>";
//Fim dos Métodos:
//----------------------------------------------------------------------------------------------------------------

//Instânciar um objeto Ave:
$ave = new Ave();
//Fim da instancia do objeto Ave:

//Chamada dos Métodos:
echo $ave->falar();
echo "<br>";
echo $ave->mover();
echo "<br>";
echo "-------------------------------------------------------------<br>";
//Fim da Chamada:


?>