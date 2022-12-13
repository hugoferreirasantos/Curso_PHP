<?php

//Requisição:
require_once("config.php");
//Fim da requisição:

//Utilizando o use:
use Cliente\Cadastro;
//Fim da utilização:


//Instânciar um objeto:
$cad =  new Cadastro();
//Fim da instanciação:

//Atribuição de valores:
$cad->setNome("Maria");
$cad->setEmail("maria@gmail.com");
$cad->setSenha("456123");
//Fim da atribuição:

//Fazer a chamado do método registrar vendas:
echo $cad->registroVenda();
echo $cad;
//Fim da chamada:




?>