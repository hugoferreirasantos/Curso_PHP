<?php
//Chamando o arquivo config.php:
require_once("config.php");

//Utilizando o método para criar um COOKIE:

$nameCookie = "COOKIE_CAKE";

$cook = new Cookie();
$cook->setCookie($nameCookie);
echo "<br>";
$result = $cook->consult_Cookie($nameCookie);

echo $result["empresa"];

?>