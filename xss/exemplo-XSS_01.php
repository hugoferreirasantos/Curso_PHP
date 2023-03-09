
<!--Formulário-->
<form method="POST">
	<input type="text" name="busca">
	<button type="submit">ENVIAR</button>
</form>


<?php
/*Exemplo de um ataque de XSS*/

//Inserindo comandos JavaScript:
$_POST["busca"] = '<a href="#"><strong>oi</strong></a><script>alert("ok")</script>';

if(isset($_POST["busca"])){

	//Como tratar o ataque XSS:
		//echo $_POST["busca"];
	echo strip_tags($_POST["busca"], "<strong><a>"); //Permitindo o uso de tags

	//Função para escrever a tag na tela:
	echo htmlentities($_POST["busca"]);


}



?>