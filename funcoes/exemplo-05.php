<?php
// Passagem por Valor VS Passagem por Referência:
///////////////////////////////////////////////////////////////////////////////////////////

/*

//Passagem por Valor:

$a = 10;
function trocaValor($b){
	//OBS: a função tem o seu escopo local, ou seja o que acontece nela fica somente nela:
	$b += 50;
	return $b;
}

echo trocaValor($a);
echo "<br>";
echo $a;

*/

//////////////////////////////////////////////////////////////////////////////////////////

//Passagem por Referência:

$a = 10;
function trocaValor(&$b){
	//OBS: altera o valor da variável, atráves do endereço de memória da variável:
	$b += 50;
	return $b;
}

echo trocaValor($a);
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo $a;



?>