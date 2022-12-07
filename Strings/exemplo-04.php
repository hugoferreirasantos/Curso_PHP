<?php
// UTILIZAR O STRPOS: (descobrir a posição ):

$frase = "A repetição é mãe da retenção";
$palavra = "mãe";

// Função STRPOS():
$q = strpos($frase, $palavra); // busca dentro da variável, o valor informado para buscar dentro da variável e retorna um indice desse valor buscado:

//var_dump($q);

// Função de Sub-pesquisa dentro de uma variável:
$text = substr($frase, 0, $q); // pega uma variável, depois a função pede o indice por onde começa a sub-pesquisa, e depois o valor de um indice para finalizar a pesquisa:

var_dump($text);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

var_dump($texto2);


?>