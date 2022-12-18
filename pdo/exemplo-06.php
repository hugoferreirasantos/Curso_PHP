<?php
//PDO Utilizando Transações:

//Conexão com o MySQL:
$conn = new PDO("mysql:host=127.0.0.1:3307;dbname=dbphp7", "root","");

//Abrir uma transação:
$conn->beginTransaction();

//Preparar valores para inserção no banco de dado:
$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE idusuario = ? ");
 
 //Variáveis com os valores de login e senha:

$id = 2;



 //Executar os comandos:
$stmt->execute(array($id));


//Fazer um cancelamento da tansação:
//$conn->rollback();

//Confirmar a tansação:
$conn->commit();

echo "Dados deletados com Sucesso !!!";

?>