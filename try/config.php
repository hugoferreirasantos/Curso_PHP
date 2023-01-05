<?php
//Fazendo um autoload da pasta class:
spl_autoload_register(function($nameClass){

	//Nome do diretório:
	$dirClass = "class";

	//Nome completo do arquivo:
	$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

	//Verificando se o arquivo existe, caso exista chame-o:
	if(file_exists($filename)){

		require_once($filename);

	}

});



?>