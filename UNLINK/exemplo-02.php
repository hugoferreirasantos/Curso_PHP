<?php

//Criando uma pasta e verificando se a pasta existe:
if (!is_dir("images")) mkdir("images");

//Escaneando a pasta:
foreach(scandir("images") as $item){

	//Retirando o pontos de arquivo:
	if(!in_array($item,array(".",".."))){

		//Apagando os arquivos dentro da pasta:
		unlink("images/".$item);

	}

}

echo "Arquivos excluidos";



?>