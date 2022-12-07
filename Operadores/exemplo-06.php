<?php
//OPERADOR DE COMPARAÇÃO NULL-COLECE (tratamento de valores nulos):

$a = NULL;
$b = 8;
$c = 10;

/*Se o A for nulo me mostra o B, se o B for nulo me mostra C */
echo $a ?? $b ?? $c;

?>