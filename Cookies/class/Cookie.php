<?php
//Class Cookie:
class Cookie{
	//Atributos:

	//Métodos:


	 //Inicio: Criando um Cookie:
	public function setCookie($nameCookie){

		

		//Atribuindo valor a variável data
		$data = array(
			"empresa"=>"$nameCookie"
		);



		//Criar o cookie:
		setcookie($nameCookie, json_encode($data), time() + 3600);

		echo "Cookie crida com sucesso!!";

		return $nameCookie;
	}
	 //Fim: Criando um Cookie:

	 //Inicio: Pegando o valor de um Cookie:
	public function consult_Cookie($nameCookie){

		//Verificar se o cookie existe:
		if(isset($_COOKIE["$nameCookie"])){

			$data = json_decode($_COOKIE["$nameCookie"],true);

		}

		return $data;

	}

	 //Fim: Pegando o valor de um Cookie:

}

?>