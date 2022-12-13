<?php

//Fazendo o autoload:
spl_autoload_register(function($nameClass){

	var_dump($nameClass);
	$dirClass = "class";
	$filename = $dirClass. DIRECTORY_SEPARATOR .$nameClass.".php";

	//Ver se o arquivo existe:
	if(file_exists($filename)){
		require_once($filename);
	}

});
//Fim do autload:


?>