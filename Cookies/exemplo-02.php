<?php
//Pegar as informações do cookie criado no arquivo exemplo-01.php:

//Verificar se o cookie existe;
if(isset($_COOKIE["NOME_DO_COOKIE"])){ 

	//Ver o valor dentro do cookie:
	//var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"]));

	//Acesando valores quando é um objeto:
	$obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);

	echo $obj->empresa;

}


?>