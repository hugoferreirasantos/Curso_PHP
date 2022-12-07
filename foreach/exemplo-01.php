<?php
//Utilizando o FOREACH:

$meses = array(
	"Janeiro", "Fevereiro", "Março", 
	"Abril", "Maio", "Junho", "Julho", 
	"Agosto", "Setembro", "Outubro", 
	"Novembro", "Dezembro"
);

/*

//Foreach:
foreach($meses as $mes){
	echo "O mes é: ".$mes."<br>";
}

*/

//Foreach para descubrir as posições do array:
foreach($meses as $index => $mes){
	echo "Indece: ".$index."<br>";
	echo "O mes é: ".$mes."<br><br>";
}



?>