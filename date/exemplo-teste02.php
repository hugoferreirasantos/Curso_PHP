<?php
// Função strftime (formata uma hora ou data de acordo com as configurações locais):

// $ts =strftime("2009-09-11");

//OBS: a função strtotime aceita expressões: como "now", "+1 day (pega o dia de amanhã)", "+1 week (pega o dia da semana na próxima semana:
$ts = strtotime("now");

$date = strtoupper(date("l , d/m/Y", $ts));

function dataExibe($data){

 	$html = '<ul>';

	$html .= "<li>";

	$html.= "<b>". $data ."</b>";

	$html .= "</li>";

	$html .= '</ul>';

	return $html ;

}

echo dataExibe($date);


?>