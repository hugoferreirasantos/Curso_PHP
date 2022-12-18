<?php
//Conexão com SQLServer:
$conn = new PDO("sqlsrv:server=localhost\SQLEXPRESS02;Database=dphp7;ConnectionPooling=0", "sa","root");

//Preparar o valores da inserção:
$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin,dessenha) VALUES(:LOGIN,:PASSWORD)");

 //Variáveis com valores de login e senha:
$login = "hugo";
$password = "123@#$";

 //Método bindParam() para tratar os valores dentro do método prepare():
$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);

 //Executar os comandos:
$stmt->execute();

echo "Inserção realizada com Sucesso !!!";

?>