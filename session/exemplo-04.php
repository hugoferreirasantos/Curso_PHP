<?php

//Recuperar um ID:
session_id('npbkagoqlahs0t42t84j27nou6');

// Forçar a criação de uma nova sessão ou gera novamente um novo ID de sessão:
require_once("config.php");

session_regenerate_id();

echo session_id();

//visualizar o array $_SESSION e ver o que tem dentro dele:
var_dump($_SESSION);

?>