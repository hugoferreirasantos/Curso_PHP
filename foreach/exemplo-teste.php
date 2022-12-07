<?php
// Realizando um teste com o foreach:

//Criar uma variável:
$lista = array("Ana Maria", "Ana Clara", "Bruna", "Bianca", "Carla", "Carolina");

//Utilizando o foreach:
foreach($lista as $index => $pessoa){ // foreach($array/colecão as $chave"PARA BUSCA" => $valor):
	echo "Indice: ".$index."<br>";
	echo "O nome da pessoa: ".$pessoa."<br><br>";
}



?>