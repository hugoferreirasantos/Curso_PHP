<?php
//Fazendo a chamada do arquivo config.php:
require_once("config.php");

/*Testando a class Mysql():
$sql = new Mysql();
$user = $sql->select("SELECT * FROM tb_usuario");
echo json_encode($user); */

/*Utilizando o Método da class Usuário para pesquisa de um Usuário:
$root = new Usuario();
$root->loadById(10);
echo $root; */

/*Carregar uma lista de usuários:
$list = Usuario::getList();
echo json_encode($list); */

/*Carregar uma busca pelo nome ou letra do usuário:
$user = Usuario::search("r");
echo json_encode($user); */

//Carrega e busca pelo usuario e senha:
$usuario = new Usuario();
$usuario->login("joaqui","!@DFV");

echo $usuario;



?>