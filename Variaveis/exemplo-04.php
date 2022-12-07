<?php
// Variáveis Pré-definidas:
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$nome = (int)$_GET["a"];
var_dump($nome); // pode usar echo para mostrar o valor também.

//como pegar o ip do usuário:
$id = $_SERVER["REMOTE_ADDR"];
echo $id;

//como consultar o nome do arquivo:
$consult = $_SERVER["SCRIPT_NAME"];
echo $consult;
?>