<?php
// Definindo a configuração reginal com setlocale():

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese"); //OBS: tipos de parâmetros para idioma na função: setlocale(LC_ALL, "pt_BR (padrão)","pt_BR.utf-8(com o utf-8)", "portuguese(padrão para windows)")

//Função strftime():
echo ucwords(strftime("%A %B"));


?>