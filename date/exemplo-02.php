<?php

//Função que retorna um timestamp
//$ts = strtotime("2001-09-11");

//OBS: a função strtotime aceita expressões: como "now", "+1 day (pega o dia de amanhã)", "+1 week (pega o dia da semana na próxima semana:
$ts = strtotime("+1 week");

echo date("l,  d/m/Y", $ts);
?>