<?php
// Fazer a exibição na tela:

//Instânciar o objeto:
$conn = new mysqli("localhost", "root", "","dbphp7" ); //IP, usuario, senha, banco de dados:
//Fim da instância:

//Testa se a conexão deu certo:
if($conn->connect_error){

	echo "Error: ". $conn->connect_error;

}
//Fim do teste:

//Fazer a consulta do banco de dados:

$result = $conn->query("SELECT * FROM tb_usuario ORDER BY deslogin"); 	//Executa um comando de pesquisa dentro do banco:


$data = array();



while($row = $result->fetch_assoc()){ // Vai verifica se existe algum dado: linha por linha se não houver dados a função fecth_array() retorna false e o laço while acaba:

//OU é só colocar fetch_assoc();


	//Transforma o resultado da consulta em JSON:
	array_push($data, $row);
	//Fim da Transformação:


	//var_dump($row);

}

//Fimd da consulta:

//Resulta do transformação para json:
echo json_encode($data);



?>