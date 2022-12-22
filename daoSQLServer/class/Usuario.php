<?php

//Class Usuário:
class Usuario{
	//Atributos:
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	//Métodos:

	 //Inicio:GETS and SETS:
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
	 //Fim:GETS and SETS:

	public function loadById($id){

		$sql = new SqlServer("dphp7","localhost\SQLEXPRESS02","sa","root");

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID",array(
			":ID"=>$id
		));

		if(count($results) > 0){

			$this->setData($results[0]);

		}

	}

	//Inicio: DAO - Data Access Object para listar dados:
	public static function getList(){

		$sql = new SqlServer("dphp7","localhost\SQLEXPRESS02","sa","root");

		return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

	}

	public static function search($login){

		$sql = new SqlServer("dphp7","localhost\SQLEXPRESS02","sa","root");

		return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :LOGIN ORDER BY deslogin", array(
			":LOGIN"=>"%".$login."%"
		));

	}

	public function login($login,$password){

		$sql = new SqlServer("dphp7","localhost\SQLEXPRESS02","sa","root");

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
			":LOGIN"=>$login,
			":PASSWORD"=>$password
		)); 

		//if(isset($results[0])){}
		if(count($results) > 0){

			$this->setData($results[0]);

		} else{

			throw new Exception("Login e/ou senha inválidos.");

		}


	}

	//Fim : DAO - Data Access Object para listar dados:

	//Inicio: Método de inserção de valores no Banco:

	public function setData($data){

		$this->setIdusuario($data['idusuario']);
		$this->setDeslogin($data['deslogin']);
		$this->setDessenha($data['dessenha']);
		$this->setDtcadastro(new DateTime($data['dtcadastro']));

	}


	public function insert(){

		$sql = new SqlServer("dphp7","localhost\SQLEXPRESS02","sa","root");

		$results = $sql->select("EXECUTE sp_usuarios_insert ':LOGIN ',':PASSWORD ' ",array(
			":LOGIN"=>$this->getDeslogin(),
			":PASSWORD"=>$this->getDessenha()
		)); //Aplicando um procidory:

		if(count($results) > 0){

			$this->setData($results[0]);


		}

	}

	//Fim:Método de inserção de valores no Banco:

	//Inicio: DAO-Data Access Object UPDATE:
	public function update($login,$password){

		//Atribuir Valores:
		$this->setDeslogin($login);
		$this->setDessenha($password);

		$sql = new SqlServer("dphp7","localhost\SQLEXPRESS02","sa","root");

		$sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID",array(
			":LOGIN"=>$this->getDeslogin(),
			":PASSWORD"=>$this->getDessenha(),
			":ID"=>$this->getIdusuario()
		));

	}

	//Fim:  DAO-Data Access Object UPDATE:

	//Inicio: DAO-Data Access Object DELETE:
	public function delete(){

		$sql = new SqlServer("dphp7","localhost\SQLEXPRESS02","sa","root");

		$sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID",array(
			":ID"=>$this->getIdusuario()
		));

		//Zerar os valores dos objetos:
		$this->setIdusuario(0);
		$this->setDeslogin("");
		$this->setDessenha("");
		$this->setDtcadastro(new DateTime());

	}

	//Fim: DAO-Data Access Object DELETE:

	

	//Inicio: Método Construtor:
	public function __construct($login = "", $password= ""){

		$this->setIdusuario($login);
		$this->setDessenha($password);

	}

	//Fim: Método Construtor:

	public function __toString(){

		return  json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y | H:i:s")
		));

	}
	
	


}

?>