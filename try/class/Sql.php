<?php
//Inicio: Class Sql:
class Sql extends PDO{
	//Atributos:
	private $conn;

	//Métodos:

	 //Inicio: Método Construct:
	public function __construct(){

		$this->conn = new PDO("mysql:host=127.0.0.1:3307;dbname=usuario", "root","");
	}

	 //Fim: Método Construct:

	 //Inicio: Método Query:

		//Inico: Métodos setParam e setParams:
	private function setParams($stmt, $parameters=array()){

		foreach($parameters as $key => $value){

			$this->setParam($stmt,$key,$value);

		}

	}

	private function setParam($stmt, $key, $value){

		$stmt->bindParam($key,$value);

	}

		//Fim : Métodos setParam e setParams:

	public function query($rowQuery, $params=array()){

		$stmt = $this->conn->prepare($rowQuery);

		$this->setParams($stmt,$params);

		$stmt->execute();

		return $stmt;



	}

	 //Fim: Método Query:

	 //Inicio: Método select:
	public function select($rowQuery, $params=array()):array{

		$stmt = $this->query($rowQuery, $params);

		return $stmt->fetchALL(PDO::FETCH_ASSOC);

	}

	 //Fim: Método select:

}

//Fim: Class Sql:

?>