<?php
//Class DAO-Data Access Object com PDO com SQLServer:

//Class SqlServer:
class SqlServer extends PDO{
	//Atributos:
	private $conn;


	//Métodos:
	public function __construct($tipoBanco,$nomeBanco,$server,$usuario,$senha){

		$this->conn = new PDO("$tipoBanco:Database=$nomeBanco;server=$server;ConnectionPooling=0", "$usuario","$senha");

	}

	//Inicio: Método para setar Varios Parâmetros:

	private function setParams($stament, $parameters= array()){

		foreach($parameters as $key => $value){

			$this->setParam($key, $value);

		}

	}

	private function setParam($stament, $key, $value){

		$stament->bindParam($key, $value);

	}

	//Fim: Método para setar Varios Parâmetros:


	public function query($rowQuery, $params= array()){

		$stmt = $this->conn->prepare($rowQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;

	}

	//Inicio: Método select:
	public function select($rowQuery, $params = array()):array{

		$stmt = $this->query($rowQuery, $params);

		return $stmt->fetchALL(PDO::FETCH_ASSOC);

	}
	//Fim: Método select:

}


?>