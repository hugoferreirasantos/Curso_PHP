<?php
// Funções no PHP 7 novidade:

function soma(int ...$values){ // os parâmetros serão arrays: chamado(declaração de tipos escalares):


	return array_sum($values); // Fazer a soma dos intens dentro do array;
}

echo soma(2,2);
echo "<br>";
echo soma(25,33);
echo "<br>";
echo soma(1.5, 3.2); //OBS: no caso de números com ponto flutuante, a função ignora o ponto e soma as primeiras casas decimais:
echo "<br>";

?>