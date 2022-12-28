<?php
/*Lendo e manipulando arquivos outro exemplos*/

$filename = "logo.png";

//Variável que vai receber uma string no formato base64:
$base64 = base64_encode(file_get_contents($filename));

//A class finfo() trabalha coletando as informações do tipo de arquivo:
$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

//Mostrando o padrão de exibição base64:
//echo"data:".$mimetype.";base64," . $base64;

$base64encode = "data:".$mimetype.";base64," . $base64;

?>

<!--Criando uma tag ancora para acessar a imagem-->
<a href="<?=$base64encode?>" target="_blank">Link da Imagem</a>

<!--Criando uma tag img para acessar a imagem-->
<img src="<?=$base64encode?>">