<?php
// Teste utilizando JSON no PHP:

$paises = array();

//Função para adicionar itens dentro de um Array:
array_push($paises,array(
	'país'=>'Brasil',
	'capital'=>'Brasilia',
	'sigla'=>'BR'
));

array_push($paises, array(
	'país'=>'Estado Unidos da América',
	'capital'=>'Whiton',
	'sigla'=>'USA'
));

array_push($paises, array(
	'país'=>'México',
	'capital'=>'Cidade do México',
	'sigla'=>'MEX'
));

//Função para mostrar o array:
//print_r($paises[2]);

//Função para trasformar o array em JSON:
echo json_encode($paises);
?>