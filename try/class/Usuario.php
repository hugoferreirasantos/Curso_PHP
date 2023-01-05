<?php
//Inicio: Class Usuario:
class Usuario{
	//Atributos:
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;


	private $iderror;
	private $nameError;
	private $fileError;
	private $lineError;
	private $dtcadastroError;

	//Métodos:

	 //Métodos GETS and SETS:

	public function getIderror(){
		return $this->iderror;
	}

	public function setIderror($value){
		$this->iderror = $value;
	}

	public function getNameError(){
		return $this->nameError;
	}

	public function setNameError($value){
		$this->nameError = $value;
	}

	public function getFileError(){
		return $this->fileError;
	}

	public function setFileError($value){
		$this->fileError = $value;
	}

	public function getLineError(){
		return $this->lineError;
	}

	public function setLineError($value){
		$this->lineError = $value;
	}

	public function getDtcadastroError(){
		return $this->dtcadastroError;
	}

	public function setDtcadastroError($value){
		$this->dtcadastroError = $value;
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

	 //Métodos GETS and SETS:

	 //Inicio: Método de Insert Tabela Usuario:

		//Método setData tabla de usuarios:
	private function setData_User($data){

		$this->setIdusuario($data["idusuario"]);
		$this->setDeslogin($data["deslogin"]);
		$this->setDessenha($data["dessenha"]);
		$this->setDtcadastro(new DateTime($data["dtcadastro"]));

	}

		//Método setData tabla de usuarios:

	public function insert_user($login,$senha){

		//Atribuindo valores a login e senha:
		$this->setDeslogin($login);
		$this->setDessenha($senha);

		$sql = new Sql();

		$results = $sql->select("CALL sp_user_insert(:LOGIN,:SENHA)",array(
			":LOGIN"=>$this->getDeslogin(),
			":SENHA"=>$this->getDessenha()
		));

		if(count($results) > 0){

			$this->setData_User($results[0]);

		}

	}

	 //Fim: Método de Insert Tabela Usuario:


	 //Inicio: Método Insert tabela de ERROS:

		//Inicio: Método setData tabela de ERROS:
	private function setData_Error($data){

		$this->setIderror($data["iderror"]);
		$this->setNameError($data["nameErro"]);
		$this->setFileError($data["fileError"]);
		$this->setLineError($data["lineError"]);
		$this->setDtcadastroError(new DateTime($data["dtcadastroError"]));

	}

		//Fim: Método setData tabela de ERROS:

	public function insert_error($nameError,$fileError,$lineError){

		//Atribuindo valores a nameError, fileError, lineError:
		$this->setNameError($nameError);
		$this->setFileError($fileError);
		$this->setLineError($lineError);

		$sql = new Sql();

		$results = $sql->select("CALL sp_user_error(:NAME,:FILE,:LINE)",array(
			":NAME"=>$this->getNameError(),
			":FILE"=>$this->getFileError(),
			":LINE"=>$this->getLineError()
		));

		if(count($results) > 0){

			$this->setData_Error($results[0]);

		}

	}




	 //Fim: Método Insert tabela de ERROS:

	 //Método toString():
	public function __toString(){

		return  json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y | H:i:s")
		));

	}


}

//Fim: Class Usuario:

?>