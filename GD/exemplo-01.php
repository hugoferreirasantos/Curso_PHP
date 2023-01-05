<?php
//Gerando imagens com a biblioteca GD:

//Inicio: Processo de crição de imagens:

 //função header:
header("Content-Type: image/PNG");

 //Variável imagem recuso:
$image = imagecreate(256,256);   //Criando a tela: recebe-Largura e altura da tela:

 //Criar paleta de cores:
$black = imagecolorallocate($image,0,0,0); //Trabalha com o padrão RGB, Criando a cor de fundo preta:
$red = imagecolorallocate($image,255,0,0);

 //Escrever algo na tela:
imagestring($image, 5, 60, 120, "Curso PHP 7", $red); //Parâmetros: $image, font, eixo-x, eixo-y, String, cor da string:

 //Gerar uma imagem no formato PNG: atenção o formato da imagem tem que está de acordo com a função header():
imagepng($image);

 //Destruir a variável recurso:
imagedestroy($image);



//Fim: Processo de crição de imagens:

?>