<?php
//Fazendo um aultoload:

spl_autoload_register(function($class_name){

	$dirClass = "class";

	$filename = $dirClass . DIRECTORY_SEPARATOR . $class_name .".php";

	//Verificar se o arquivo existe e se exisir fazer um require_once:
	if(file_exists($filename)){

		require_once($filename);

	}

});

?>