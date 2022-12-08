<?php
// Exercício utilizando a Class DateTime:

// Instânciar um objeto:
$dt = new DateTime();

function exibicao($objeto){

	return $objeto->format("d/m/Y - H:i:s");

}



echo exibicao($dt);

?>