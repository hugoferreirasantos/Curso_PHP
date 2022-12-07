<?php

//Tipo de Dados no PHP:

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// 1ºTipo(Basicos):

// String:
$nome = "Hcode";
$site = 'www.hcode.com.br';
// Numérico:
$ano = 1990;
// Ponto flutuante (float):
$salario = 5500.99;
// Booleano:
$bloqueado = false;
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// 2ºTipo(Compostos):

//Array:
$frutas = array("abacaxi","laranja","manga");
//echo $frutas[2]; // acessando um indice do array:

//Objeto:
$nascimento = new DateTime();
//var_dump($nascimento); // Indentificar o tipo de dado:
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// 3ºTipo(Especiais):

//resurse:
$arquivo = fopen("exemplo-03.php", "r");
//var_dump($arquivo);

//Null:
$null = NULL; // ausência de valor:

// nulo é diferente de vazio: $vazio = "" (foi iniciado só que não tem informação);


?>