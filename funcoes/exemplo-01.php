<?php
// Criando funções:

/*
//Exemplo de sub-rotina:
function ola(){
	echo "Olá mundo<br>";
}
ola();//chamando a função;
ola();//chamando a função;

*/

//Exemplo de sub-rotina:
function ola(){
	return "Olá mundo ! <br>";
}
echo ola();
$frase = ola();

echo strlen($frase);
?>