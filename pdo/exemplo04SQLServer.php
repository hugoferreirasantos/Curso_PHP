<?php
//Conexão com o SQLServer:
$conn = new PDO("sqlsrv:server=localhost\SQLEXPRESS02;Database=dphp7;ConnectionPooling=0", "sa","root");

///Preparar o valores da inserção:
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

 //Variáveis com os valores de id, login, password:
 $id = 2;
 $login = "filipe";
 $password = "123@%782";

 ////Método bindParam() para tratar os valores dentro do método prepare():
$stmt->bindParam(":ID", $id);
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

 //Executar os comandos:
$stmt->execute();

echo "Alteração feita com Sucesso !!!";


?>