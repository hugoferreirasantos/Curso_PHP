<?php
//Utilizando a função json_decode:

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';

$data = json_decode($json, true); // passa como parâmetro o JSON, true(verdadeiro): OBS: se não colocar True no parâmetro o json se tranforma em objeto e não array:

var_dump($data);



?>