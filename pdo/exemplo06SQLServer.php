<?php
//Conexão com SQLServer:
$conn = new PDO("sqlsrv:server=localhost\SQLEXPRESS02;Database=dphp7;ConnectionPooling=0", "sa","root");

//Abrir a transação:
$conn->beginTransaction();

//Preparar valores para inserção no banco de dado:
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

//Cancelar a transação:
//$conn->rollback();

//Confirmar a transação:
$conn->commit();

echo "Dado deletado com Sucesso !!";

?>