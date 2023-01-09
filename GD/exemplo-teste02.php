<?php
//Chamando o arquivo config.php:
require_once("config.php");

$img = new Gd();
//$img->create_img();
//$img->editando_img("certificado.jpg");

//$img->editando_img_com_fontes("certificado.jpg");

$img->redimencionamento_img("PG (1).png");

?>