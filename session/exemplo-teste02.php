<?php
require_once("config2.php");


//Função que limpa as variáveis de sessão:
session_unset($_SESSION['Nome']); 

echo $_SESSION["Nome"];

//Função que limpa a variável e remove o usuário:
session_destroy(); 

?>