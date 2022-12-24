<?php
//Lendo arquivos:

$images = scandir("images"); //escanear o diretório:

//Retorna um array():
//var_dump($images);

$data = array();

//Fazer um foreach() para percorrer o array():
foreach($images as $img){

	if(!in_array($img, array(".",".."))){ //Parâmetros: alvo da busca, busca:

		$filename = "images" . DIRECTORY_SEPARATOR . $img;

		$info = pathinfo($filename);

		//Pegar o tamanho do arquivo:
		$info["size"] = filesize($filename); //Retorna o tamanho do arquivo em bytes:

		//Data de modificação de um arquivo:
		$info["modified"] = date("d/m/Y | H:i:s", filemtime($filename));

		//Acessar o arquivo via URL:
		$info["url"] = "http://localhost/DIR/". str_replace("\\","/",$filename); //str_replace(desejo colocar na url, o que desejo trocar, nome do arquivo)

		//var_dump($info);

		//Transformar em json:
		array_push($data, $info); //inserção de valores dentro do array();

	}

}

//Transformar o array em json:
echo json_encode($data);

?>