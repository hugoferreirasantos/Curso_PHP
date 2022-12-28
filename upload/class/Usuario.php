<?php
//Class Usuario:
class Usuario {

	//Atributos:
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;
	private $idupload;
	private $namefile;
	private $dtupload;



	//Métodos:

	 //GETS E SETS:
	public function getDtupload(){
		return $this->dtupload;
	}

	public function setDtupload($value){
		$this->dtupload = $value;
	}

	public function getIdupload(){
		return $this->idupload;
	}

	public function setIdupload($value){
		$this->idupload = $value;
	}

	public function getNamefile(){
		return $this->namefile;
	}

	public function setNamefile($value){
		$this->namefile = $value;
	}

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
	//fim: GETS e SETS:

	public function loadById($id){

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuario WHERE idusuario = :ID", array(
			":ID"=>$id
		)); 

		//if(isset($results[0])){}
		if(count($results) > 0){

			$this->setData($results[0]);

		}



	}


	//Inicio: DAO-Data Access Object para lista dados:
	public static function getList(){

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuario ORDER BY deslogin");

	}

	public static function search($login){

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuario WHERE deslogin LIKE :SEARCH ORDER BY deslogin",array(
			":SEARCH"=>"%".$login."%"
		));

	}

	public function login($login, $password){

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuario WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
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

	//Inicio: Método de inserção de valores no banco:

	public function setData($data){

		$this->setIdusuario($data['idusuario']);
		$this->setDeslogin($data['deslogin']);
		$this->setDessenha($data['dessenha']);
		$this->setDtcadastro(new DateTime($data['dtcadastro']));

	}

	public function insert(){

		$sql = new Sql();

		$results = $sql->select("CALL sp_usuario_insert(:LOGIN, :PASSWORD)",array(
			":LOGIN"=>$this->getDeslogin(),
			":PASSWORD"=>$this->getDessenha()
		)); //Aplicando um procidory:

		if(count($results) > 0){

			$this->setData($results[0]);

		}

	}


		//Método de inserção na tablela upload:
	public function setDataUp($data){

		$this->setIdupload($data['idupload']);
		$this->setNamefile($data['namefile']);
		$this->setDtupload(new DateTime($data['dtupload']));

	}

	public function insertUpload(){

		$sql = new Sql();

		$results = $sql->select("CALL sp_upload_insert(:V)",array(
			":V"=>$this->getNamefile()
		));

		if(count($results) > 0){

			$this->setDataUp($results[0]);

		}

	}

		//Método de inserção na tablela upload:

	//Fim: Método de inserção de valores no banco:

	 //Inicio: DAO - Data Access Object UPDATE:
	public function update($login, $password){

		//Atribuir valore:
		$this->setDeslogin($login);
		$this->setDessenha($password);

		$sql = new Sql();

		$sql->query("UPDATE tb_usuario SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID",array(
			":LOGIN"=>$this->getDeslogin(),
			":PASSWORD"=>$this->getDessenha(),
			":ID"=>$this->getIdusuario()
		));

	}

	 //Fim: DAO - Data Access Object UPDATE:

	 //Inicio: DAO -Data Access Object DELETE:
	public function delete(){

		$sql = new Sql();

		$sql->query("DELETE FROM tb_usuario WHERE idusuario = :ID",array(
			":ID"=>$this->getIdusuario()
		));

		//Zerar os valore que estão dentro dos objetos:
		$this->setIdusuario(0);
		$this->setDeslogin("");
		$this->setDessenha("");
		$this->setDtcadastro(new DateTime());

	}

	 //Fim: DAO -Data Access Object DELETE:


	//Método Magico Construtor:
	public function __construct($namefile = ""){

		//$this->setDeslogin($login);
		//$this->setDessenha($password);
		$this->setNamefile($namefile);

	}

	

	//Fim: DAO-Data Access Object para lista dados

	public function __toString(){

		return  json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y | H:i:s"),
			"idupload"=>$this->getIdupload(),
			"namefile"=>$this->getNamefile(),
			"dtupload"=>$this->getDtupload()->format("d/m/Y | H:i:s")
		));

	}

}

?>