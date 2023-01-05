<?php
//Chamando o arquivo config.php:
require_once("config.php");


//Inserindo valores no banco de dados;
function insert($login, $senha){

	$user = new Usuario();
	$user->insert_user($login,$senha);

	if(!$login || !$senha){

		throw new Exception("Não foi passado nenhum valor para senha ou login: ");

	}

	echo $user;


}

//Se der um error:
try{

	insert("beatriz","7891");
	insert("","4562");


} catch(Exception $e){


    $erro = new Usuario();
    $erro->insert_error($e->getMessage(),$e->getFile(),$e->getLine());


	echo $e->getMessage();
	echo"<br>";
	echo $e->getFile();
	echo "<br>";
	echo $e->getLine(); 


}finally{

	echo "<br>";

	echo "Executou o try com sucesso!!";

}





?>