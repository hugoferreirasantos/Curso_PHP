<?php

//Fazer a requisisão do arquivo config.php:
require_once("config.php");
//Fim da requisisão:

//Usar o namespace:
use Cliente\Cadastro;
//Fim do namespace:


//Instânciar um objeto:
$cad = new Cadastro();
//Fim da instanciação:

//Atribuir valores:
$cad->setNome("Mario");
$cad->setEmail("mario@hcode.com.br");
$cad->setSenha("123456");
//Fim da atribuição de valores:

//Chamada do Método registroVenda:
echo $cad->registroVenda();
//Fim da chamada:


?>