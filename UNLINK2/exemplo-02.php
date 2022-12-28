<?php
//Criando uma pasta e verificando se ela existe:

if(!is_dir("imgaes")) mkdir("images");



//Escanear a pasta com os arquivos:
foreach(scandir("images") as $item){

	//Retirando os pontos de arquivo:
	if(!in_array($item,array(".",".."))){

		//Remover os arquivos da pasta:
		unlink("images/". $item);

	}

}



?>