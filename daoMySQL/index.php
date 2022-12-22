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
//$usuario = new Usuario();
//$usuario->login("joaqui","!@DFV");
//echo $usuario;

/*Utilizando o método insert() - inserir dados no banco:
$aluno = new Usuario("aluno","hjJK@12");
$aluno->insert();
echo $aluno; */

/*Utilizando o método UPDATE() - Alterar dados no banco:
$user = new Usuario();
$user->loadById(4);
$user->update("maria","123sdh@");
echo $user; */

//Utilizano o método DELETE() - Apagar dados:
$user = new Usuario();
$user->loadById(3);

$user->delete();
echo $user;



?>