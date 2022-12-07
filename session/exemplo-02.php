<?php
require_once ("config.php");

session_unset($_SESSION['nome']); //Apaga totas as sessões incluindo o nome das sessões ou seja ele limpa as variáveis de sesão:


echo $_SESSION["nome"];

session_destroy(); // outro comando para limpar as variáveis de sessão, o session_destroy() ele destroi literalmente a variável de sessão, ele limpa a variável e remove o usuário:

?>