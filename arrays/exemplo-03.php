<?php
// Funções para tratamento de Arrays:

$pessoas = array();

//Função para adicionar itens dentro do array:
array_push($pessoas, array( // passa como parâmetro o ($array , $valor);:
	'nome'=>'João',
	'idade'=>20
)); 

array_push($pessoas, array(
	'nome'=>'Glaucio',
	'idade'=>25
)); 

//Função para mostrar o array $pessoas:
print_r($pessoas[0]['nome']);

?>