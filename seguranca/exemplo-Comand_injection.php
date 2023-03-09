<?php
/*Exemplo de Comand Injection: Simples*/

if($_SERVER["REQUEST_METHOD"] === 'POST'){

	//se evita o Comand Injection utilizando a função scapeshellcmd dentro da variável cmd:
	$cmd = $_POST["cmd"];

	//var_dump($cmd);

	echo "<pre>";

	$comando = system($cmd,$retorno);


	echo "</pre>";

}


?>

<!--Formlário HTML com o method POST-->

<form method="POST">
	<input type="text" name="cmd">
	<button type="submit">ENVIAR</button>
</form>