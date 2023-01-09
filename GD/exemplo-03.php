<?php
//Aprendendo a colocar fontes externas em imagens com biblioteca GD:

//Inicio: Presso de edição de imagens existentes:

 //Variável recurso:
$image = imagecreatefromjpeg("certificado.jpg");

 //Paleta de cores:
$titleColor = imagecolorallocate($image,0,0,0); //Cor para o titulo da imagem:
$gray = imagecolorallocate($image,100,100,100); //Cor cinza:

 //Escrever na imagem:
imagettftext($image,32,0,320,250,$titleColor,"fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf","CERTIFICADO"); //Titulo da imagem:
imagettftext($image,32,0,375,350,$titleColor,"fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf","Divaney Aparecido"); //Nome do aluno que concluiu o curso:
imagestring($image,5,440,370,utf8_decode("Concluído em ".date("d/m/Y")),$titleColor); //Data da conclusão:

 //Modificar o cabeçalho:
header("Content-Type: image/jpeg");

 //Criar uma imagem jpeg: 
//imagejpeg($image, "certificado".date("Y-m-d").".jpg", 10); //Parâmetros: imagem, nome do imagem para salvar, qualidade da imagem:

imagejpeg($image);

 //Destruir a variável recurso:
imagedestroy($image);


//Fim: Presso de edição de imagens existentes:

?>