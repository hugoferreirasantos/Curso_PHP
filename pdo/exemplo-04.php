<?php
//Conexão com o MySQL:
$conn = new PDO("mysql:host=127.0.0.1:3307;dbname=dbphp7", "root","");

//Preparar valores para inserção no banco de dado:
$stmt = $conn->prepare("UPDATE tb_usuario SET deslogin = :LOGIN , dessenha = :PASSWORD WHERE idusuario = :ID ");
 
 //Variáveis com os valores de login e senha:
$login = "joao";
$password = "753$#@91";
$id = 2;

 //Método bindParam() para passar os valores das variáveis para o método prepare():
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

 //Executar os comandos:
$stmt->execute();

echo "Dados Alterados com Sucesso !!!";


?>