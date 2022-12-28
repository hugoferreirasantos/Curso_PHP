<?php
/*Utilizando a função fgets()-(ler linha por linha do arquivo): */

$filename = "usuarios.csv";

if(file_exists($filename)){

	//Abrir o arquivo no modo leitura:
	$file = fopen($filename,"r"); 

	//Pegar os cabeçalhos do arquivo:
	$headers =  explode( ",",fgets($file)); //explode()-(tira as virgular do arquivo na parte do cabeçalho)

	//var_dump($headers);

	//Variável que vai receber os dados:
	$data = array();

	//Enquanto tiver linhas para serem lidas faça:
	while($row = fgets($file)){

		$rowData = explode(",",$row);

		//Outro array:
		$linha = array();

		//Fazendo o for para percorrer cada linha com o seu valor:
		for($i =0; $i < count($headers); $i++){

			$linha[$headers[$i]] = $rowData[$i];

		}

		//Adicionando as informações dentro da variável data:
		array_push($data, $linha);

	}

	//Fechando o arquivo:
	fclose($file);

	//Tranformando a variável data em JSON:
	echo json_encode($data);

}



?>