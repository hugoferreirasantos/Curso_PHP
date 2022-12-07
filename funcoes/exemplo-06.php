<?php
// Exemplo de variáveis por referência:

$pessoas = array(
	'nome'=>'João',
	'idade'=>20
);

// Fazendo alterações no valor do array dentro de um FOREACH:
foreach($pessoas as &$value){

	if(gettype($value) === 'integer'){ // gettype retorna o tipo de dado da minha variável:
		$value += 10;
	}
	echo $value."<br>";
}

print_r($pessoas);

?>