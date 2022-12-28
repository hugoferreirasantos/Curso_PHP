<?php
//Excluindo arquivos:

$file = fopen("teste.txt","w+"); //Criando um arquivo:

fclose($file); //Fechar o arquivo:

//Função de exclusão de arquivos:
unlink("teste.txt");

echo "Arquivo removido com sucesso!!!";

?>