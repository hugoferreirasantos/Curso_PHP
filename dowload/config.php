<?php
//Fazendo o autoload da pasta Class:
spl_autoload_register(function($classname){

	$dirClass = "class";
	$filename = $dirClass. DIRECTORY_SEPARATOR. $classname.".php";

	//Verificar se o arquivo existe:
	if(file_exists($filename)){

		require_once($filename);

	}

});

?>