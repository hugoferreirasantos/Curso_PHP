<?php
// Chamada do arquivo Config.php:
require_once("config.php");

$sqlServer = new SqlServer("sqlsrv","dphp7","localhost\SQLEXPRESS02","sa","root");

$usuarios= $sqlServer->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

?>