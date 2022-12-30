<?php
//Autoload da pasta Class:
spl_autoload_register(function($nameClass){

	//Nome do diretório:
	$dirClass = "class";

	//Nome do arquivo:
	$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php"; 

	if(file_exists($filename)){

		require_once($filename);

	}



});


?>