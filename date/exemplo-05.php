<?php
// Class Datetime:


$dt = new DateTime(); // Instânciando um Objeto:
$periodo = new DateInterval("P15D"); // Método que faz a soma de N-dias  apartir da data atual:

echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo); // Método para incrementar dadas:

echo "<br>";

echo $dt->format("d/m/Y H:i:s");



?>