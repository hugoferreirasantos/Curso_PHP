<?php
//Aplicando DAO - Data Access Object na class Usuário:

//Class Usuário:
class Usuario{
	/*Atributos*/
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	/*Métodos*/

	 //Inicio: GETS and SETS:
	public function getIdusuario(){
		return $this->idusuario;
	}

	public function setIdusuario($value){
		$this->idusuario = $value;
	}

	public function getDeslogin(){
		return $this->deslogin;
	}

	public function setDeslogin($value){
		$this->deslogin = $value;
	}

	public function getDessenha(){
		return $this->dessenha;
	}

	public function setDessenha($value){
		$this->dessenha = $value;
	}

	public function getDtcadastro(){
		return $this->dtcadastro;
	}

	public function setDtcadastro($value){
		$this->dtcadastro = $value;
	}

	 //Fim: GETS and SETS

	 //Inicio: Método loadByID():
	public function loadById($id){

		$sql = new Mysql();

		$results = $sql->select("SELECT * FROM tb_usuario WHERE idusuario = :ID",array(
			":ID"=>$id
		));

		//Verificando se existe elementos dentro do banco:
		if(count($results[0]) > 0){

			$row = $results[0];

			$this->setIdusuario($row['idusuario']);
			$this->setDeslogin($row['deslogin']);
			$this->setDessenha($row['dessenha']);
			$this->setDtcadastro(new DateTime($row['dtcadastro']));


		}

	}

	 //Fim: Método loadByID():


	 //Inicio : DAO-Data Access Object para lista dados:

		//Inicio: Pesquisa todo o banco:
	public static function getList(){

		$sql = new Mysql();

		return $sql->select("SELECT * FROM tb_usuario ORDER BY deslogin");

	}
		//Fim: Pesquisa todo o banco:

		//Inicio: Pesquisa por usuário:

	public static function search($login){

		$sql = new Mysql();

		return $sql->select("SELECT * FROM tb_usuario WHERE deslogin LIKE :LOGIN ORDER BY deslogin",array(
			":LOGIN"=>"%".$login."%"
		)); 

	}
		//Fim: Pesquisa por usuário:

	public function login($login, $password){

		$sql = new Mysql();

		$results = $sql->select("SELECT * FROM tb_usuario WHERE deslogin = :LOGIN AND dessenha = :PASSWORD",array(
			":LOGIN"=>$login,
			":PASSWORD"=>$password
		));

		//Valida se existe algum dado:
		if(count($results[0]) > 0){

			$row = $results[0];

			$this->setIdusuario($row['idusuario']);
			$this->setDeslogin($row['deslogin']);
			$this->setDessenha($row['dessenha']);
			$this->setDtcadastro(new DateTime($row['dtcadastro']));

		} else{

			throw new Exception("Login e/ou senha Inválidos.");

		}

	}


	 //Fim : DAO-Data Access Object para lista dados:


	 //Inicio: Método Mágico Construtor __toString():
	public function __toString(){

		return json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y | H:i:s")
		));

	}

	 //Fim: Método Mágico Construtor __toString():



}

?>