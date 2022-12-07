<form>
	<input type="text" placeholder="NOME" name="nome">
	<input type="text" placeholder="SOBRENOME" name="sobrenome">
	<input type="date" name="nascimento">
	<input type="submit" value="OK">
</form>

<?php

if(isset($_GET)){
	foreach($_GET as $key => $value){
		echo "Nome do campo: ".$key."<br>";
		echo "Valor do campo: ".$value."<br>";
		echo "<hr>";
	}
}

?>