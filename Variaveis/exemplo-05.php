<?php
// Escopo de Variáveis:
////////////////////////////////////////////////////////////////////

$nome = "Glacio"; //escopo global:



//escopo local
function teste(){

	global $nome; // referindo-se a variável global:
	echo $nome; // essa variável é local da função:
}

function teste2(){
	$nome = "João";
	echo $nome." agora no teste2";
}



teste();
teste2();

?>