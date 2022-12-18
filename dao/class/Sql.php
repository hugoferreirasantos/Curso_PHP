<?php
// Aprendendo a utilizar DAO-Data Access Object e PDO:

//Class SQL:
class Sql extends PDO{
	//Atributos:
	private $conn;

	//Métodos:
	public function __construct(){

		$this->conn = new PDO("mysql:host=127.0.0.1:3307;dbname=dbphp7", "root", "");

	}

	//Método para setar Varios Parâmetros:
	private function setParams($stament, $parameters = array()){

		foreach($parameters as $key => $value){

			$this->setParam($key, $value);

		}

	}

	
	private function setParam($stament, $key, $value){

		$stament->bindParam($key, $value);

	}



	public function query($rowQuery, $params= array()){

		$stmt = $this->conn->prepare($rowQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt ;

	}

	public function select($rowQuery, $params= array()):array{

		$stmt = $this->query($rowQuery, $params);

		return $stmt->fetchALL(PDO::FETCH_ASSOC);
	}


}

?>