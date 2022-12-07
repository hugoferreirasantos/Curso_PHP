<?php
// Fazendo teste com arrays no PHP:

$estados = array();

array_push($estados, array(
	'estado'=>'São Paulo',
	'UF'=>'SP'
));

array_push($estados, array(
	'estado'=>'Goiás',
	'UF'=>'GO'
));

array_push($estados, array(
	'estado'=>'Minas Gerais',
	'UF'=>'MG'
));

print_r($estados);




?>