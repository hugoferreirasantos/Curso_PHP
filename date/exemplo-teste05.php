<?php
// Exercício Referente ao exemplo-05.php:
//Class DateTime:

// Instânciando o objeto:
$dt = new DateTime();
$periodo = new DateInterval("P15D");

// Função de Exibição:
function exibicao($dt, $periodo){
	
	echo "Antes da Alteração de 15 dias: ";
	echo $dt->format("d/m/Y - H:i:s");

	$dt->add($periodo);

	echo "<br>";
	echo "Depois da alteração de 15 dias:";
	return $dt->format("d/m/Y - H:i:s");
}

echo exibicao($dt,$periodo);

?>