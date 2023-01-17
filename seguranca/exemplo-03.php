<?php
//Entendendo as permissões de pasta:

$pasta = "arquivos";

//Permissão:
$permissao = "0775";

if(!is_dir($pasta)) mkdir($pasta,$permissao);  //Permissões de arquivo dentro de mkdir()

echo "Diretório criado com sucesso:";




?>