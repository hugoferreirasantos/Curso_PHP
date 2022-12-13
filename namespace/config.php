<?php
//Usando o namespace do PHP:

//Fazer a procura por classes num Diritório:
spl_autoload_register(function($nameClass){

	var_dump($nameClass);

 	$dirClass = "class";
 	$filename = $dirClass. DIRECTORY_SEPARATOR .$nameClass.".php"; //Caminho do arquivo:

 	//Ver se o arquivo existe:
 	if(file_exists($filename)){

 		require_once($filename);
 	}

});

?>