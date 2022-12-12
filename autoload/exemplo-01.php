<?php
// Utilizando o Autoload do PHP:

//Função autoload para chamada das classes que estão na pasta:
function __autoload($nomeClass){

	var_dump("$nomeClass");
	require_once("$nomeClass.php");
	
}
//Fim da função:


//Instanciando um objeto:
$carro = new DelRey();
//Fim da instanciação:

//Chamada de métodos:
$carro->acelerar(80);
//Fim da chamada:

?>