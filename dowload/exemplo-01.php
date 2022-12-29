<?php
/*Fazendo dowload no PHP7 com a função file_get_content:(Pegar o conteúdo de um arquivo) */

//Caminho de arquivo:
$link = "https://www.google.com.br/logos/doodles/2022/seasonal-holidays-2022-6753651837109831.8-ladc.gif";

//Conteúdo da imagem:
$content = file_get_contents($link); //Posso passar URLS e endereços de arquivos locais:

//var_dump($content);

//Transformar o arquivos que está na URL em um arquivo real
$parse = parse_url($link);

$basename =  basename($parse["path"]); //Pegar o nome do arquivo com o função basename():

//Criar um arquivo:
$file = fopen($basename,"w+");

fwrite($file, $content);

fclose($file);

?>

<!--Criando uma tag img para mostrar a imgem na tela:-->

<img src="<?=$basename?>">