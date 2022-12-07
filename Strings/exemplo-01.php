<?php
// Diferença entre aspas duplas e simples:

$nome = "Hcode";
$nome2 = ' Treinamentos';

//var_dump($nome, $nome2);

// OBS: Interpolação de variáveis(busca no código a variável , utilizando aspas duplas);
echo "ABC $nome"; // com aspas duplas, posso colocar o valor dentro da variável numa string:

echo "<br>";
echo 'ABC $nome'; // com aspas simples, ele vai mostrar apenas no nome da variável; (entendi que tudo é texto);

?>