<?php
// Parâmetros(ou argumentos) para funções:

/*
function ola($texto){

	return "Olá $texto! <br>";
} 

echo ola("mundo");
echo ola("Glaúcio");
echo ola("João");

*/
//////////////////////////////////////////////////////////////////////////////////////////////////////////

/*

function ola($texto = "mundo", $periodo = "Bom dia"){

	return "Olá $texto! $periodo! <br>";
}

echo ola();
echo ola("", "Boa noite");
echo ola("Glacio", "Boa tarde");
echo ola("João", "");

*/

/////////////////////////////////////////////////////////////////////////////////////////////////////////
/*

function ola($texto, $periodo = "Bom dia"){

	return "Olá $texto! $periodo! <br>";
}

echo ola("Mundo"); //OBS: neste caso, eu sou obrigado a passar um parâmetro:
echo ola("", "Boa noite");
echo ola("Glacio", "Boa tarde");
echo ola("João", "");

*/
///////////////////////////////////////////////////////////////////////////////////////////////////////

function ola($texto = "Mundo", $periodo){

	return "Olá $texto! $periodo! <br>";
}

echo ola("Mundo", "Bom dia"); //OBS: neste caso eu sou obrigado a passar o primeiro valor e logo depois o segundo:
echo ola("", "Boa noite");
echo ola("Glacio", "Boa tarde");
echo ola("João", "");


?>