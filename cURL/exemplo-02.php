<?php
//Fazendo a chamada do arquivo config.php:
require_once("config.php");

//Utilizando o Método insert_endereco( ) da class Endereco:
$cep = "22010000";
$end = new Endereco();
$end->insert_endereco($cep);
//echo $end; 

//Utilizando o Método getList():
//$end = new Endereco();
$endereco = $end->getList();
echo json_encode($endereco);




?>
