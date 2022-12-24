<?php
//Criando arquivos:

/*

$file = fopen("log.txt","w+");//Criando um arquivo:

//Escrever dentro do arquivo:
fwrite($file, date("Y-m-d | H-i-s"));

//Fecha o arquivo:
fclose($file);

echo "Arquivo criado com sucesso!";

*/

//Exemplo de modificação de arquivo adicionado no final do arquivo:

$file = fopen("log.txt","a+");//Criando um arquivo:

//Escrever dentro do arquivo:
fwrite($file, date("Y-m-d | H-i-s"). "\r\n");

//Fecha o arquivo:
fclose($file);

echo "Arquivo criado com sucesso!";

?>