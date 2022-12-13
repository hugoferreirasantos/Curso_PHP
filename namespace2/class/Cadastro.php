<?php

//Class Cadastro:
class Cadastro{
	//Atributos:
	private $nome;
	private $email;
	private $senha;

	//Métodos:
	public function getNome():string{
		return $this->nome;
	}

	public function getEmail():string{
		return $this->email;
	}

	public function getSenha():string{
		return $this->senha;
	}

	public function setNome($nome){

		$this->nome = $nome;

	}

	public function setEmail($email){

		$this->email = $email;

	}

	public function setSenha($senha){

		$this->senha = $senha;

	}

	public function __toString(){

		return json_encode(array(
			"Nome"=>$this->getNome(),
			"Email"=>$this->getEmail(),
			"Senha"=>$this->getSenha()
		));

	}

}
//Fim da Class Cadastro:


?>