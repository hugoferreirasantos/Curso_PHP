<?php
// Exercício de definição de configuração local com setlocale():
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

$f_time = strtoupper(strftime(" DATA: %A, %d/%m/%Y "));

function exibicao($funcao){

	$html = '<style>
					body{
						background-color: black;
					}
					li{color : blue;
						width: 200px;
						height: 200px;
					}

			</style>';

	$html .= '<ul>';

	$html .= "<li>";

	$html .= "<b><i><u>".$funcao ."</u></i></b>";

	$html .= "</li>";

	$html .= "</ul>";

	return $html;

}

echo exibicao($f_time);

?>