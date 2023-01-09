<?php
//Aprendendo a gerar miniaturas de imagens com a biblioteca GD:

//inicio: Processo:
 
 //função header():
header("Content-Type: image/jpeg");

 //Variável file:
$file = "wallpaper.jpg";

 //Variáveis para as novas alturas e larguras:
$new_width = 256;
$new_heith = 256;

/*

 //Pegar o tamanho da imagem dentro da variável $file:
$data = getimagesize($file); 

 //Pegando as informações que a função getimagesize retorna:
$width = $data[0];
$heith = $data[1];

*/

 //ou:

list($old_width,$old_heith) = getimagesize($file);

 /* Criar uma nova tela */

 //Criando uma imagem com as novas dimensões:
$new_image = imagecreatetruecolor($new_width,$new_heith);

 //Criando uma imagem com as antigas dimensões:
$old_image = imagecreatefromjpeg($file);

 /* Mesclas as imagens */
imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_heith, $old_width, $old_heith); //Parâmetros: imagem destino, imagem antiga, posição de recorte x, posição de recorde y, ponto de inicio do eixo x, ponto de inicio eixo y, largura da imagem destino, altura da imagem destino, largura da imagem origem, altura da imagem origem;

 //Gerar uma imagem jpeg:
imagejpeg($new_image);

 //Destruir as imagens da mémoria:
imagedestroy($new_image);
imagedestroy($old_image);


//fim: Processo:


?>