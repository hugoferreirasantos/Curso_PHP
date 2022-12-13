<?php

//Fazer o riquire_once do arquivo config.php:
require_once("config.php");

//Usar um namespace com a pasta e a classe:
use Cliente\Cadastro;
//Fim do Namespace:

//Criar um objeto da classe Cadastro:
$cad = new Cadastro();
//Fim da instanciação da classe:

//Atribuir valores:
$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");
//Fim da atribuição:

//Chamada do Método Mágico dentro da classe:
$cad->registrarVenda();
//Fim da chamada:


?>