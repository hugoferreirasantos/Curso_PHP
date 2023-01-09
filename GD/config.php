<?php
//Fazendo o autoload:
spl_autoload_register(function($nameClass){

	//Nome do diretorio:
	$dirClass = "class";

	//Nome do arquivo:
	$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

	//Se o arquivo existir chame-o:
	if(file_exists($filename)){

		require_once($filename);

	}

});

?>