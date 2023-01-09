<?php

//Criando imagem com a biblioteca GD:

//Incio: Processo de criação de imagem:

 //Função header:
header("Content-Type: image/PNG");

 //Variável recurso:
$img = imagecreate(500,500);

 //Criar paleta de cores:
$gree = imagecolorallocate($img,0,255,0);
$black = imagecolorallocate($img,0,0,0);

 //Escrever algo na tela:
imagestring($img,5,60,60,"Hello Word", $black);

 //Gerar uma imagem no formato PNG:
imagepng($img);

 //Destruir a variável recurso:
imagedestroy($img);

//Fim: Processo de criação de imagem:




?>