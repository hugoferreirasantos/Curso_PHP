<?php
//Aprendendo a evitar Comand Injection:


if($_SERVER["REQUEST_METHOD"] === "POST"){

	$cmd = escapeshellcmd($_POST["cmd"]); //Função escapeshellcmd serve para impedir a injeção de comandos cmd:

	var_dump($cmd);

	echo "<pre>";

	$comando = system($cmd, $retorno);

	echo "</pre>";

}







/*Exemplo de uso da injeção de comando com a função system:
echo "<pre>";

$comando = system("dir C:", $retorno);

echo "</pre>";

*/


?>

<!--Exemplo de como pegar as informações de maneira dinâmica: -->
<form method="POST">

	<input type="text" name="cmd">
	<button type="submit">Enviar</button>

</form>