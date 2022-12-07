<?php
// Exercício referente ao exemplo-10 e exemplo-11;

//Funções Anônimas:

function teste($callback){

 	$callback();
}

teste(function(){
	echo "Terminou";


});

?>