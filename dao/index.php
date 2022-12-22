<?php
//Chamar o arquivo config:
require_once("config.php");

/* Utilizando somente a class Sql():

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuario");

echo json_encode($usuarios);

*/

//Utilizando a Class Usuário Carrega um usuário:
//$root = new Usuario();
//$root->loadByID(3);
//echo $root;


//Carrega uma Lista de Usuários:
//$list = Usuario::getList();
//echo json_encode($list);


//Carrega uma lista de usuários buscando pelo login:
//$search = Usuario::search("j");
//echo json_encode($search);

//Carrega um usuário usando um login e a senha:
//$usuario = new Usuario();
//$usuario->login("joao","$%DFGN123");
//echo $usuario;

/*Utilizando o método insert() inserir usuários:
$aluno = new Usuario("alana","456G@#");
	//Antes de colocar o método construtor:
	//$aluno->setDeslogin("aluno");
	//$aluno->setDessenha("@lun0");

$aluno->insert(); 

echo $aluno; */

/*Utilizando o Método UPDATE() Alteração de usuário:
$usuario = new Usuario();
$usuario->loadById(13);

$usuario->update("professor","$%¨&HHN");

echo $usuario; */


//Utilizando o Método DELETE():
$usuario = new Usuario();
$usuario->loadById(7);

$usuario->delete();

echo $usuario; 



?>