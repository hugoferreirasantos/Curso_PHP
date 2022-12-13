<?php
//Utilizando o autoload:

spl_autoload_register(function($nomeClass){

	$dirClass = "class";
	$filename = $dirClass. DIRECTORY_SEPARATOR . $nomeClass.".php";

	if(file_exists($filename)){

		require_once($filename);

	}


});

spl_autoload_register(function($nameInter){

	$dirInterface = "interface";
	$filename = $dirInterface . DIRECTORY_SEPARATOR . $nameInter.".php";

	if(file_exists($filename)){

		require_once($filename);

	}

});


?>