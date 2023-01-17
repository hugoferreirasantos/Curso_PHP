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

			$this->setData($results[0]);


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

			$this->setData($results[0]);

		} else{

			throw new Exception("Login e/ou senha Inválidos.");

		}

	}


	 //Fim : DAO-Data Access Object para lista dados:

	//Inicio: Método de inserção de valores no banco de dados:

	public function setData($data){

		$this->setIdusuario($data['idusuario']);
		$this->setDeslogin($data['deslogin']);
		$this->setDessenha($data['dessenha']);
		$this->setDtcadastro(new DateTime($data['dtcadastro']));

	}

	public function insert(){

		$sql = new Mysql();

		$results = $sql->select("CALL sp_usuario_insert(:LOGIN,:PASSWORD)",array(
			":LOGIN"=>$this->getDeslogin(),
			":PASSWORD"=>$this->getDessenha()
		)); //Aplicando uma Procedure:

		if(count($results) > 0){

			$this->setData($results[0]);

		}

	}

	//Fim: Método de inserção de valores no banco de dados:

	//Inicio: DAO - Data Access Object UPDATE:
	public function update($login,$password){

		//Atribuir Valores:
		$this->setDeslogin($login);
		$this->setDessenha($password);

		$sql = new Mysql();

		$sql->query("UPDATE tb_usuario SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID",array(
			":LOGIN"=>$this->getDeslogin(),
			":PASSWORD"=>$this->getDessenha(),
			":ID"=>$this->getIdusuario()
		));

	}

	//Fim: DAO - Data Access Object UPDATE:

	//Inicio : DAO - Data Access Object DELETE:
	public function delete(){

		$sql = new Mysql();

		$sql->query("DELETE FROM tb_usuario WHERE idusuario = :ID",array(
			":ID"=>$this->getIdusuario()
		));

		//Zera os valores que estão dentro das variávies do Objeto:
		$this->setIdusuario(0);
		$this->setDeslogin("");
		$this->setDessenha("");
		$this->setDtcadastro(new DateTime());

	}

	//Fim: DAO - Data Access Object DELETE:


	//Inicio: Método Construtor:
	public function __construct($login="",$password=""){

		$this->setDeslogin($login);
		$this->setDessenha($password);


	}
	//Fim: Método Construtor:

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