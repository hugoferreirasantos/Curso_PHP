<?php
//Arquivo que vai verificar se o diretório existe caso contrario vamos criar um arquivo:

//Nome do Diretório:
$name = "images";

//Inicio: Função que verifica se o diretório existe:
 
 //se não existir crie um diretório:
if(!is_dir($name)){ 

	//Criar um diretório:
	mkdir($name);
	echo "Diretório $name Criado com sucesso !!!";

}else { //se existir escreva "Já existe":

	//Função para remover o diretório:
	rmdir($name);

	echo "Já existe o diretório: $name foi removido";

}






?>