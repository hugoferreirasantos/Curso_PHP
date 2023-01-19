<?php
//Recebendo as informações do arquivo exemplo-teste01.php:

$email = $_POST["inputEmail"];


//Realizando a utilização da API do rCAPTCHA:
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

 //Atribuir valores dentro de um JSON:
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(

	"secret"=>"6LcCpgIkAAAAAJRNW6FXlY--BcfpWRrKYutHMqTn",
	"response"=>$_POST["g-recaptcha-response"],
	"remoteip"=>$_SERVER["REMOTE_ADDR"]

	
)));


curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$recaptcha = json_decode(curl_exec($ch), true);

curl_close($ch);

//var_dump($recaptcha);

if($recaptcha["success"] === true){

	echo "OK ". $email;

}else{

	header("Location: exemplo-teste01.php");

}







?>