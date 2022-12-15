<?php
//Utilizando a classe MySQLi do PHP:

//Instânciar o objeto:
$conn = new mysqli("127.0.0.1:3307", "root", "","dbphp7" ); //IP, usuario, senha, banco de dados:
//Fim da instância:

//Testa se a conexão deu certo:
if($conn->connect_error){

	echo "Error: ". $conn->connect_error;

}
//Fim do teste:

//Fazer a inserção de valores para o banco de dados:

$stmt = $conn->prepare("INSERT INTO tb_usuario (deslogin, dessenha) VALUES(?,?)");

$stmt->bind_param("ss", $login, $pass); //Tipos da dados, Valores:

$login = "user";
$pass = "12345";


$stmt->execute();

$login = "root";
$pass = "@#¨%@*";

$stmt->execute();

//Fim da inserção de valores:


?>