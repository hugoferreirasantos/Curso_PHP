<?php
//Fazendo a chamada das class Sql e usuarios
require_once("config.php"); 
?>
<!--Criar o formulario para submeter arquivos:-->

<form method="POST" enctype="multipart/form-data">
	
	<input type="file" name="fileUpload">
	<button type="submit">Send</button>

</form>

<?php
//Verificar se o tipo de solicitação é igual a "POST":
if($_SERVER["REQUEST_METHOD"] === "POST"){

	//Criar um arquivo file para receber as informações do arquivo:
	$file = $_FILES["fileUpload"];

	//Se existir um error no file me retorne esse erro:
	if($file["error"]){

		throw new Exception("Error: ". $file["error"]);

	}

	//Variável que contém o nome do diretório:
	$dirUploads = "uploads 2";

	//Verificar se o diretório existe:
	if(!is_dir($dirUploads)){

		mkdir($dirUploads);

	}

	//Função de uploads de arquivos:
	if(move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR. $file["name"])){

		$upload = new Usuario($file["name"]);
		$upload->insertUpload();

		echo "Upload realizado com sucesso!";


	}else{

		throw new Exception("Não foi possivél realizar o upload");

	}

}

?>

