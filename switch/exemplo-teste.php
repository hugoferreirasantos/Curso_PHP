<?php
// Fazendo testes com SWITCH CASE:

$time1 = 20;
$time2 = 5;

$resultadoSoma = $time1 + $time2;

switch($resultadoSoma){
	case 35:
	echo "Parabéns, vocês são campeões";
	break;

	case 25:
	echo "Parabéns, vocês são vice-campeões";
	break;

	case 15:
	echo "Parabéns, vocês ocuparam o terceiro lugar do campeonato";
	break;

	default:
	echo "Infelizmente, vocês não ganharam";
	break;
}

?>