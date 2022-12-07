<?php

function ola(){

	$argumentos = func_get_args(); // Função que retorna todos as argumentos passados na função externa em formato de array:

	return $argumentos;
}

var_dump(ola("Bom dia", 10));
?>