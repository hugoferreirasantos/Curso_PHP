<?php
//Editando imagem já existentes com a biblioteca GD:

//Inicio: Presso de edição de imagens existentes:

 //Variável recurso:
$image = imagecreatefromjpeg("certificado.jpg");

 //Paleta de cores:
$titleColor = imagecolorallocate($image,0,0,0); //Cor para o titulo da imagem:
$gray = imagecolorallocate($image,100,100,100); //Cor cinza:

 //Escrever na imagem:
imagestring($image,5,450,150,"CERTIFICADO",$titleColor); //Titulo da imagem:
imagestring($image,5,440,350,"Divaney Aparecido",$titleColor); //Nome do aluno que concluiu o curso:
imagestring($image,3,440,370,utf8_decode("Concluído em ".date("d/m/Y")),$titleColor); //Data da conclusão:

 //Modificar o cabeçalho:
header("Content-Type: image/jpeg");

 //Criar uma imagem jpeg: 
imagejpeg($image, "certificado".date("Y-m-d").".jpg", 10); //Parâmetros: imagem, nome do imagem para salvar, qualidade da imagem:

 //Destruir a variável recurso:
imagedestroy($image);


//Fim: Presso de edição de imagens existentes:

?>