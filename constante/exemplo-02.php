<?php
// Fazer o valor de uma constante se torna um array:

define("BANCO_DE_DADOS",[
	'127.0.0.1', //servidor
	'root', //usuário
	'password', //senha
	'test' // nome do banco de dados

]); /* OBS: caso deseje tornar o nome da constante CASE-INSENSITIVE é só colocar mais um parâmetro no caso true:
ai eu posso chamar a constante sem me preocupar se terei que escreve-la em maiúscula ou minúscula: MAS NÃO É UMA BOA PRÁTICA :*/



//Vizualizar Constante:
print_r(BANCO_DE_DADOS);

?>