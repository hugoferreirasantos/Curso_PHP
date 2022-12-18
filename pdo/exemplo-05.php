<?php
//Conexão com o MySQL:
$conn = new PDO("mysql:host=127.0.0.1:3307;dbname=dbphp7", "root","");

//Preparar valores para inserção no banco de dado:
$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE idusuario = :ID ");
 
 //Variáveis com os valores de login e senha:

$id = 8;

 //Método bindParam() para passar os valores das variáveis para o método prepare():

$stmt->bindParam(":ID", $id);

 //Executar os comandos:
$stmt->execute();

echo "Dados deletados com Sucesso !!!";

?>