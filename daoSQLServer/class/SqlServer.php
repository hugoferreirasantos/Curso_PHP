<?php
//Class DAO-Data Access Object com PDO com SQLServer:

//Class SqlServer:
class SqlServer extends PDO{
	//Atributos:
	private $conn;


	//Métodos:
	public function __construct($nomeBanco,$server,$usuario,$senha){

		$this->conn = new PDO("sqlsrv:Database=$nomeBanco;server=$server;ConnectionPooling=0", "$usuario","$senha");

	}

	//Inicio: Método para setar Varios Parâmetros:

	private function setParams($statement, $parameters = array()){

		foreach($parameters as $key => $value){

			$this->setParam($statement,$key,$value);

		}

	}

	
	private function setParam($statement, $key, $value){

		$statement->bindParam($key, $value);

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