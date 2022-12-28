<?php
/*Utilizando a função fgets() - ler linha por linha de um arquivo: */

$filename = "usuarios.csv";

//Verificando se o arquivo existe:
if(file_exists($filename)){

	//Abrir o arquivo no modo leitura:
	$file = fopen($filename,"r");

	//Pegar o cabeçalho do arquivo:
	$headers = explode(",",fgets($file));

	//var_dump($headers);

	//Variável para receber os dados:
	$data = array();

	//Inicio: Enquanto tiverem linhas para serem lidas faça:
	while($row = fgets($file)){

		$rowData = explode(",",$row);

		//Outro array:
		$linha = array();

		//Fazendo um for para percorrer cada linha com o seu valor referente:
		for($i = 0; $i < count($headers); $i++){

			$linha[$headers[$i]] = $rowData[$i];

		}

		//Adicionar as informações dentro do array data:
		array_push($data,$linha);
	}

	//Fim: Enquanto tiverem linhas para serem lidas faça:

	//Fechar o arquivo:
	fclose($file);

	//Transformar o array data em JSON:
	echo json_encode($data);

}




?>