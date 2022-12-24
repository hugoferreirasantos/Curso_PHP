<?php
//Criar um Diretório com o PHP:

//Nome do Diretório:
$name = "images";

//Inicio: Função para verificar se o arquivo existe:
if(!is_dir($name)){

	//Criar um Diretório:
	mkdir($name);
	echo "Diretório <b>$name</b>  criado com sucesso!!!";

} else{ //se existir, agora vamos remover o diretório:

	//Função que remove o dirétorio:
	rmdir($name);

	echo "O Diretório <b>$name</b> foi removido";


}

//Fim: Função para verificar se o arquivo existe:

?>