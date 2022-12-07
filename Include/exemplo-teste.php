<?php
require_once ("../foreach/exemplo-teste.php");

print_r($lista);

//Função para Transformar um array em JSON:
echo "<br>";
echo json_encode($lista);

?>