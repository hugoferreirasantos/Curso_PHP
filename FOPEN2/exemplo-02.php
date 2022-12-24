<?php
/*Fazendo a exportação de dados do banco de dados para um arquivo csv*/

//Chamada do arquivo config:
require_once("config.php");

$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuario ORDER BY deslogin");

//print_r($usuarios);

$headers = array(); //Cabeçalhos:

//Inicio: Usando um foreach para criar um arquivo csv:
 
 //Adicionar elementos dentro do Headesrs:
foreach($usuarios[0] as $key => $value){

	array_push($headers,ucfirst($key));

}

 //Inicio: Colocar dados dentro do arquivo csv:
$file = fopen("usuarios.csv","w+");

fwrite($file, implode(",",$headers)."\r\n");

foreach($usuarios as $row){

	$data = array();

	foreach($row as $key => $value){

		array_push($data,$value);

	}

	fwrite($file,implode(",",$data)."\r\n");

}

 //Fim: Colocar dados dentro do arquivo csv:

fclose($file);



//Fim: Usando um foreach para criar um arquivo csv:






?>