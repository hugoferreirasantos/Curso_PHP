<?php
//Fazendo o autoload de arquivos de Class:
spl_autoload_register(function($nameClass){

	//Variável de diretório:
	$dirClass = "class";

	//Variável de Caminho de Arquivo:
	$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

	//Verificar se o arquivo existe com a função file_exists():
	if(file_exists($filename)){

		require_once($filename);
		
	}

});

?>