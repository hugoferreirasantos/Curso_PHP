<?php
//Outro exemplo de fgets():

$filename = "logo.png";

//Variável que vai receber uma string já formatada em base64:

$base64 = base64_encode(file_get_contents($filename)); //Lê todo o conteúdo inteiro do arquivo:

//Função fileinfo trabalha coletando informações do tipo do arquivo para deixar mais dinâmico:
$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

//Montar o padrão de exibição do base64:
//echo"data:".$mimetype.";base64," . $base64;

$base64encode = "data:".$mimetype.";base64," . $base64;

?>


<!--Criando um tag ancora para acessar a imagem-->
<a href="<?=$base64encode?>" target="_blank">Link para Imagem</a>

<!--Acessando a imagem pela tag img-->
<img src="<?=$base64encode?>">

