<?php
//Fazend um teste Utilizando a função json_decode() que transforma um JSON em array:
$json = '[{"pa\u00eds":"Brasil","capital":"Brasilia","sigla":"BR"},{"pa\u00eds":"Estado Unidos da Am\u00e9rica","capital":"Whiton","sigla":"USA"},{"pa\u00eds":"M\u00e9xico","capital":"Cidade do M\u00e9xico","sigla":"MEX"}]' ;

$data = json_decode($json,true);

var_dump($data);
?>