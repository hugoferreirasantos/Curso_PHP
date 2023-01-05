<?php

//Fazendo o autoload da pasta classs:
spl_autoload_register(function($nameClass){
	//Criar o dirétorio:
	$dirClass = "class";

	//Nome do arquivo:
	$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass .".php";

	//Se o arquivo existir basta chama-lo:
	if(file_exists($filename)){

		require_once($filename);

	}

});


?>