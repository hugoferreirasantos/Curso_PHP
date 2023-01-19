<?php

//Utilizando a criptografia mycript:

//Inicio: Processo de encriptação:

$data = [
	"nome"=>"Hcode"
];

define('SECRET', pack('a16','senha')); //Função pack transforma um valor em 16 bits:

$mcript = mcrypt_encrypt(
	MCRYPT_RIJNDAEL_128, //tipo de algoritmo:
    SECRET, //Constante que foi definida logo acima:
   	json_encode($data), //String que vai ser encriptada:
    MCRYPT_MODE_ECB //Modo de criptografia:
);

$final = base64_encode($mcript);

var_dump($final);

//Fim: Processo de encriptação:

//Inicio: Processo de decriptação:
$string = mcrypt_decrypt(
	MCRYPT_RIJNDAEL_128
	,SECRET,
	base64_decode($final), 
	MCRYPT_MODE_ECB

);

var_dump(json_decode($string, true));

//Fim: Processo de decriptação:

?>