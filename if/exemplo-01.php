<?php

$qualAsuaIdade = 125;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

// Utilizando a estrutura condicionais: IF,ELSE:

// IF, ELSE, ELSE IF:
if($qualAsuaIdade < $idadeCrianca){
	echo "Criança";
}else if($qualAsuaIdade < $idadeMaior){
	echo "Adolescente";
}else if($qualAsuaIdade < $idadeMelhor){
	echo "Adulto";
}else{
	echo "Idoso";
}

echo "<br>";

// Exemplo de operador Ternário:
/*OBS: Usar o operador ternário sempre quando houver uma condição simples.*/
echo ($qualAsuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";



?>