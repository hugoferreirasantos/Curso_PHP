<?php
//Fazendo a chamada do arquivo:
require_once("config.php");

$rename = new Rename();
$rename->insert_rename("folder_2","folder_3","teste3.txt");
//echo $rename;

//Utilizando a Método getList() da Class Rename:
echo json_encode($rename->getList());



?>