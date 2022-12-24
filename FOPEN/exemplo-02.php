<?php
//Fazendo exportação de dados do banco para um arquivo csv:

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuario ORDER BY deslogin");

//print_r($usuarios);

$headers = array();

//Usando um foreach para criar um csv:
foreach ($usuarios[0] as $key => $value) {
	
	array_push($headers, ucfirst($key));

}

//Inicio: Colocar os dados dentro do arquivo:
$file = fopen("usuarios.csv","w+");

fwrite($file, implode(",",$headers)."\r\n"); //Função para adicionar strings dentro do array: Cabeçalho:

 //Inserir os dados do banco:

 //Inicio: Foreach de linha:
foreach($usuarios as $row){

	$data = array();

	//Inicio: Foreach de coluna:
	foreach($row as $key => $value){

		array_push($data, $value);

	} //Fim: Foreach de coluna:

	fwrite($file,implode(",", $data). "\r\n"); 

} //Fim: Foreach de linha:

fclose($file);

//Fim: Colocar os dados dentro do arquivo:




?>