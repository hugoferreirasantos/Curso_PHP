<?php
// Funções para Sessão:
//-----------------------------------------------------------------------------------------------------

require_once("config.php");

// Função session_save_path (obtém/ ou define o caminho para armazenamento da sessão atual):
echo session_save_path();

echo"<br>";
//Função session_status (Veriva o status da sessão), Tratando com o switch case:
var_dump(session_status());

echo "<br>";

switch(session_status()){

	case PHP_SESSION_DISABLED:
	echo "As sessões estão desabilitadas: ";
	braek;

	case PHP_SESSION_NONE :
	echo "As sessões estiveram habilitadas, mas nenhuma existe:";
	braek;

	case PHP_SESSION_ACTIVE:
	echo "As sessões estiveram habilitadas, e uma existi:";
	braek;
}

?>