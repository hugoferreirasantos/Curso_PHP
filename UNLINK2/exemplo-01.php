<?php
//Criando um arquivo:
$file = fopen("teste.txt","w+");

fclose($file); //Fechar o arquivo:

//Excluir o arquivo:

unlink("teste.txt"); //Colocar o nome do arquivo:
echo "Arquivo excluido com sucesso!";

?>