<?php
//Processo de criação de Cookies no PHP:

$data = array(
	"empresa"=>"Hcode Teinamentos",

);

setcookie("NOME_DO_COOKIE",json_encode($data), time() + 3600); //Parâmetros: nome do Cookie, atribuir um valor, tempo de duração do cookie + quantidade de tempo em segundos;

echo "OK cookie criado";

?>