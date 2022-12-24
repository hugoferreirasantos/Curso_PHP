<?php
/*Criando e manipulando arquivos:

$file = fopen("log.txt","w+"); //Criado um arquivo:

fwrite($file,date("d-m-Y | H-i-s")); //Escrevendo dentro do arquivo:

//Fechar o arquivo:
fclose($file); 

*/

//Exemplo de modificação de arquivos:

$file = fopen("log.txt","a+");

fwrite($file,date("d-m-Y | H-i-s"). "\r\n");

//Fechar o arquivo:
fclose($file);

echo "Arquivo criado com sucesso !!!";





?>