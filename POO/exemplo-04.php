<?php
// Métodos Mágicos:


//Class:
class Endereco {
	//Atributos:
	private $logradouro;
	private $numero;
	private $cidade;

	//Métodos:
	public function __construct($a, $b, $c){ //Método Construtor e é um Método Mágico: OBS: Não subistitui os get e set;

		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;
	}

	public function __destruct(){ //Método Mágico usado para liberar mémoria:

		//var_dump("DESTRUIR");
	}

	public function __toString(){ //Método Mágico para trasforma em String ou Converter para String:

		return $this->logradouro .",".$this->numero."-".$this->cidade;
	}


}

//Exemplo utilizando o método construtor Mágico:
$meuEndereco = new Endereco("Rua das Rosas", "123", "Santos-SP");

//var_dump($meuEndereco);

//Exemplo de utilização do método destruct():
//unset($meuEndereco);

//Exemplo de utilização do método mágico __toString():
echo $meuEndereco;



?>