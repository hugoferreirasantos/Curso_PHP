<?php
//Chamar o arquivo config:
require_once("config.php");

/* Utilizando somente a class Sql():

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuario");

echo json_encode($usuarios);

*/

//Utilizando a Class Usuário:
$root = new Usuario();

$root->loadByID(3);

echo $root;

?>