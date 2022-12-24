<?php
//Escanear pastas e informações do arquivo:

$images = scandir("images");

//var_dump($images);

//Array de dados:
$data = array();

//Fazer um foreach para percorrer um array:
foreach($images as $img){

	if(!in_array($img,array(".",".."))){

		$filename = "images". DIRECTORY_SEPARATOR . $img;

		$info = pathinfo($filename);

		//Inicio: Adicionar informações dentro do array:

		$info["seze"] = filesize($filename); //Retorna o tamanho do arquivo em Byts:

		$info["modified"] = date("d/m/Y | H:i:s", filemtime($filename));

		//Acessar via URL:
		$info["url"] = "http://localhost/DIR2/". str_replace("\\","/",$filename); //str_replace(desejo colocar na url, o que desejo trocar, nome do arquivo)

		//Fim: Adicionar informações dentro do array:

		//Adicionando valores dentro de data:
		array_push($data,$info);



	}

}

//Tranformando em JSON:
echo json_encode($data);


?>