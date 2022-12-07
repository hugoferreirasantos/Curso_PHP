<?php
// Utilizando o laço FOR:

/*

EXEMPLO BÁSICO DO FOR:

for($i=0; $i < 10; $i++){
	echo $i."<br>";
}

*/

//Contando de 5 em 5 até 1000:
for($i = 0; $i < 1000; $i+=5){

	if($i >= 200 && $i <= 800) continue; // ignorar e passar para o próximo comando:

	if($i === 900) break;

	echo $i."<br>";
}


?>