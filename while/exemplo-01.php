<?php
//Utilizando o WHILE:
$condicao = true;

while($condicao){
	$numero = rand(1,10);

	if($numero === 3){
		echo " TRÊS!!!";
		$condicao = false;
	}

	echo $numero . "";
}

?>