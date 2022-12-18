<?php
//Conexão com o MySQL:
$conn = new PDO("mysql:host=127.0.0.1:3307;dbname=dbphp7", "root","");

//Preparar valores para inserção no banco de dado:
$stmt = $conn->prepare("INSERT INTO tb_usuario(deslogin,dessenha) VALUES(:LOGIN,:PASSWORD)");
 
 //Variáveis com os valores de login e senha:
$login = "jose";
$password = "1234567890";

 //Método bindParam() para passar os valores das variáveis para o método prepare():
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

 //Executar os comandos:
$stmt->execute();

echo "Inserido OK!";


?>