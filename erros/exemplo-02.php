<?php

//Escondendo o erros:
error_reporting(E_ALL & ~E_NOTICE); //Vai sobrescrever os notice do php para não aparecerem na tela mas os erros vão continuar aparecendo:

//Forçando erros:
$nome = $_GET["nome"];

echo $nome;

?>