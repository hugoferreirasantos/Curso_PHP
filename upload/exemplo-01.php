<!--Criando um Upload com PHP 7-->

<!--Tag form-->
<form method="POST" enctype="multipart/form-data">

    <input type="file" name="fileUpload">

    <button type="submit">Send</button>

</form>

<?php

//Verificar se o tipo de solicitação é "POST":
if($_SERVER["REQUEST_METHOD"] === "POST"){

	//Criar a variável file para receber informações do arquivo:
	$file = $_FILES["fileUpload"];

	//Se existe um erro me retorne o erro:
	if($file["error"]){

		throw new Exception("Error: ".$file["error"]);

	}

	//Variável que contém o nome do diretório que vai receber os arquivos uploads:
	$dirUploads = "uploads";

	//Verificar se o diretório extiste, se não existir cria-lo:
	if(!is_dir($dirUploads)){

		mkdir($dirUploads);

	}

	//Função de upload de arquivos:
	if(move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){

		echo "Upload realizado com sucesso!!!";

	}else{

		throw new Exception("Não foi possivél realizar o upload. ");

	}

}

?>