<!--Aprendendo a como evitar o Cross-site_Scripting_(XSS)->ateque hacker: -->

<form method="POST">
	
	<input type="text" name="busca">
	<button type="submit">ENVIAR</button>

</form>


<?php

//$_POST["busca"] = '<a href="www.google.com"<strong>oi</strong></a><script>alert("OK");</script>';

if(isset($_POST["busca"])){

	//echo strip_tags($_POST["busca"], "<strong><a>"); //Permitindo tagas do HTML: Função que remove as tags da tela:

	echo htmlentities($_POST['busca']); //Função que transforma o HTML ensirido em texto:



}

?>