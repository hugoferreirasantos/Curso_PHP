<?php

/*Utilização da Class Mysqli*/

//Iniciar um objeto do tipo:
$conn = new mysqli("127.0.0.1:3307","root","","dbphp7_teste");

//Testa se a conexão de certo:
if($conn->connect_error){

	echo "Error ".$conn->connect_error;

}

//Fazer a inserção de valore dentro do banco de dados:

$stmt = $conn->prepare("INSERT INTO td_usuario(deslogin, dessenha) VALUES(?,?)");

$stmt->bind_param("ss",$login, $senha); // Tipos de dados, Valores:

$login = "mario";
$senha = "78912";

$stmt->execute();


//Fim da inserção:


?>