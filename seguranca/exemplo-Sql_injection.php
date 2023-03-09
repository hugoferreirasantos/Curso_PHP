<?php
/*Exemplo de um ataque SQL_INJECTION - Simulação de ataque*/

$id = (isset($_GET["id"]))?$_GET["id"]:4;

//Inicio: Como tratar a informação vinda da URL:
if(!is_numeric($id) || strlen($id) > 5){

	exit("Pegamos Você!");

}
//Fim: Como tratar a informação vinda da URL:


$conn = mysqli_connect("127.0.0.1:3307","root","","dbphp7"); //host,usuário,senha,banco de dados:

$sql = "SELECT * FROM tb_usuario WHERE idusuario = $id";

$exec = mysqli_query($conn,$sql);

//Exibir o resultado do banco de dados na tela:
while ($resultado = mysqli_fetch_object($exec)){

	//echo $resultado->deslogin. "<br>";
	var_dump($resultado);


}


?>