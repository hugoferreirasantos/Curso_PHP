<?php
//Aprendendo a utilizar a funçao openssl_encrypt:

//Inicio: Processo de encriptação:

//Definindo as constantes:
define('SECRET_VI', pack('a16', 'senha'));
define('SECRET', pack('a16', 'senha'));

$data = [
	"nome"=>"Hcode"
];

$openssl = openssl_encrypt(
	json_encode($data), //Dados que serão encriptados:
	'AES-128-CBC', //O tipo de algoritmo:
	SECRET, //A senha:
	0, 
	SECRET_VI //A segunda senha:s
);

echo $openssl;

//Fim: Processo de encriptação:

//Inicio: Processo de decriptação:
$string = openssl_decrypt($openssl, 'AES-128-CBC', SECRET,0,SECRET_VI);


var_dump(json_decode($string, true));


//Fim: Processo de decriptação:




?>