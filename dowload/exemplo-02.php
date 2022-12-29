<?php

//Fazendo a chamada do arquivo config.php:
require_once("config.php");

//Criando um arquivo e colocando o seu nome no banco de dados:
//$link = "https://www.google.com.br/logos/doodles/2022/seasonal-holidays-2022-6753651837109831.8-ladc.gif";
$link = "https://logospng.org/wp-content/uploads/javascript.png";
$file = new Dowload();
//$file->insert($link);

echo json_encode($file->getList());


?>


