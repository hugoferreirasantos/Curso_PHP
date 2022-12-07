<?php
/*Declarando variáveis da forma correta:
 Exemplos: */

$anoNascimento = 1990;
$nomeCompleto = "";
$sobrenome = "Rangel";
$nome1 = "João"; // é aceito, ou seja pode:

/* $1nome = "" (não pode declarar uma variável dessa maneira.) */

/* OBS: não é aceito o uso de carácteres especiais como %, -, +, e evitem números no inicio. E não pode o uso de nomes particulares da linguagem->Exemplo: $this(e uma palavra reservada da linguagem) 
 
 (SÓ E PERMITIDO O USO DO ANDERLINE (_)) :
 Ex: $nome_completo = ""; */

//----------------------------------------------------------------------------------------------------------------------

 //Como apagar variáveis no PHP:

 //echo $nome1;
 //echo "<br>";
// unset($nome1); // esta função apaga a variável, e é possível adicionar mais de uma variável nos parâmetros da função:

 /* Função (isset) para saber se uma variável exite no código ou seja validar se ela existe, se ela existir a função dará o retorno: */

 /*if (isset($nome1)){
 	echo $nome1;
 } */

 //---------------------------------------------------------------------------------------------------------------------

//Concatenação de Variávies:

/*OBS: no PHP, para concatenar utiliza-se (.)*/

//EX01:
$nomeCompleto = $nome1 . " ". $sobrenome;
echo $nomeCompleto;
exit;
 

?>