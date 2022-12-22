<?php
// Chamada do arquivo Config.php:
require_once("config.php");



/*

$sqlServer = new SqlServer("dphp7","localhost\SQLEXPRESS02","sa","root");

$usuarios= $sqlServer->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

*/

/*Utilizando a Class Usuário Carrega um usuário:
$user = new Usuario();
$user->loadById(3);
echo $user; */

//Carrega varios usuários:
//$user = Usuario::getList();
//echo json_encode($user);

//Carrega um busca por um usuário específico:
//$login = Usuario::search("sergio");
//echo json_encode($login);

//Carregar uma consulta por login e senha no banco:
//$usuario = new Usuario();
//$usuario->login("sergio","456@ERvb");
//echo $usuario;

/*Utilizando o método insert() - inserir usuarios:
$aluno = new Usuario("ana","Asd#%412");
$aluno->insert();
echo $aluno; */

/*Utilizando o método UPDATE - Alteração:
$user = new Usuario();
$user->loadById(7);
$user->update("adam","452@#d");
echo $user; */

//Utilizando o método DELETE - exclusão de dados:
$user = new Usuario();
$user->loadById(7);
$user->delete();
echo $user;



?>