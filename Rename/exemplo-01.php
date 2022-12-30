<?php
//Aprendendo a utilizar a função RENAME()-Movendo arquivos:

//Criar dois diretórios:
$dir1 = "folder_1";
$dir2 = "folder_2";

 //Diretório 1:
if(!is_dir($dir1)) mkdir($dir1);

 //Diretório 2:
if(!is_dir($dir2)) mkdir($dir2);


//Nome do arquivo:
$filename = "README.txt";

//Criar o arquivo dentro de folder_1:
if(!file_exists($dir1. DIRECTORY_SEPARATOR .$filename)){

	//Criando o arquivo:
	$file = fopen($dir1. DIRECTORY_SEPARATOR .$filename,"w+");

	//Escrevendo dentro do arquivo:
	fwrite($file,date("Y-m-d | H-i-s"));

	fclose($file);

}

//Função de mover arquivos: RENAME():

rename($dir1 . DIRECTORY_SEPARATOR . $filename, $dir2. DIRECTORY_SEPARATOR . $filename); //Parâmetros: arquivo original, novo destino do arquivo:

echo "Arquivo movido com sucesso!!";

?>