<?php
//Criando a class Sql:

//Inicio: Class Sql:
class Sql extends PDO{
	//Atributos:
	private $conn;

	//Métodos:
	public function __construct(){

		$this->conn = new PDO("mysql:host=127.0.0.1:3307;dbname=dowload","root","");

	}

	private function setParams($stmt, $parameters=array()){

		foreach($parameters as $key => $value){

			$this->setParam($stmt,$key,$value);

		}

	}

	private function setParam($stmt,$key,$value){

		$stmt->bindParam($key,$value);
	}


	public function query($rowQuery,$params=array()){

		$stmt = $this->conn->prepare($rowQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;

	}

	public function select($rowQuery, $params=array()):array{

		$stmt = $this->query($rowQuery,$params);

		return $stmt->fetchALL(PDO::FETCH_ASSOC);

	}

}

//Fim: Class Sql:


?>