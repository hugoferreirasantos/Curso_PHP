<?php

/*Fazer a consulta no banco de dados: */

//Fazer a conexão:
$conn = new mysqli("localhost","root","","dbphp7_teste");

//Testar se a conexão deu certo:
if($conn->connect_error){

	echo "Error" . $conn->connect_error;

}

//Fazer a consulta no banco de dados:
$result = $conn->query("SELECT * FROM td_usuario ORDER BY deslogin");

$data = array();

while($row = $result->fetch_assoc()){

	array_push($data,$row);


}

//Transformar o resultado da pesquisa em JSON:
echo json_encode($data);





?>