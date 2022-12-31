<?php
//Consumindo a biblioteca cURL para consultar CEP:

//Cep:
$cep = "01310100";
//URL da API Via CEP:
$link = "https://viacep.com.br/ws/$cep/json/";

/*Utilizando a biblioteca cURL:*/

$ch = curl_init($link); //Parâmetro: endereço de url:

//Comandos:
curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1 ); //Parâmetros: ch, CURLOPT_RETURNTRANSFER(Comando para mandor os dados e retorna) , 1(me retorne a informação):

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);

//Pegar a resposta da cURL:

$response = curl_exec($ch); //Mandar executar  a $ch:

//Fechar a conexão da cURL:

curl_close($ch);

//Tranformar o retorno da variável response que está em JSON para ARRAY();
$data = json_decode($response,true);

//print_r($data['localidade']);
print_r($data);






?>