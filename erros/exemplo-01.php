<?php
//Manipulação de erros:

function error_handler($code,$message,$file,$line){ //Parâmetros: codigo do erro, menssagem error, arquivo erro, linha erro:

	echo json_encode(array(
		"code"=>$code,
		"message"=>$message,
		"line"=>$line,
		"file"=>$file
	));


} 

//Função para manipulação de erros:
set_error_handler("error_handler");

//Forçar um error:
echo 100 / 0;




?>