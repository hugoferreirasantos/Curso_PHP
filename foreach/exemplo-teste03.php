<form>
	<input type="text" name="nome">
	<input type="submit" value="OK">
</form>

<?php

if(isset($_GET)){

	$pessoas = array();

	for($i=0; $i <= 10; $i++){
		array_push($pessoas, array(
		'pessoa'=>$_GET["nome"]
		));	
	}
	

	print_r($pessoas);
	

	

}

?>