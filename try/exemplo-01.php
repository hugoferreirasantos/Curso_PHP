<?php
//Aprendendo a utilizar o try catch:

//Bloco try e catch:
try{

	throw new Exception("Houve um erro.",400);

} catch(Exception $e){ //nome da classe e uma variável para armazenamento:


	//Devolvendo a informação do erro no formato de json:
	echo json_encode(array(
		"message"=>$e->getMessage(), //Mensagem de erro:
		"line"=>$e->getLine(), //Linha do erro:
		"file"=>$e->getFile(), //Arquivo que deu o erro:
		"code"=>$e->getCode() //Código do erro:
	));


}


?>