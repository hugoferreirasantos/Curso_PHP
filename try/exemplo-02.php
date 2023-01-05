<?php
//Bloco para tratar erro de execução:

//Criando uma função para simular o erro:
function trataNome($name){

	//Se a variável nome veio falso:
	if(!$name){

		throw new Exception("Nenhum nome foi informado. ");

	}

	//Da um echo na variável $name:
	echo ucfirst($name). "<br>";

}

//Se der um erro: 
try{

	trataNome("joão");
	trataNome("");

} catch(Exception $e){

	echo $e->getMessage();

} finally{ //Sempre é executado por último:

	echo "Executou o bloco try!";

}

?>