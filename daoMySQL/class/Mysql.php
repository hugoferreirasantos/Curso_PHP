<?php
//Criando a Class Mysql que extende de PDO:

//Class Mysql:
class Mysql extends PDO{
	/*Atributos*/
	private $conn;

	/*Métodos*/

	 //Inicio: Método Construtor __construct:
	public function __construct(){

		$this->conn = new PDO("mysql:host=127.0.0.1:3307;dbname=dbphp7","root","");

	}
	 //Fim: Método Construtor __construct:


	 //Inicio: Métodos que compoem o método query():
	private function setParams($statement, $parameters = array()){

		//foreach para procurar valores dentro do banco:
		foreach($parameters as $key => $value){

			$this->setParam($statement,$key,$value);

		}

	}

	private function setParam($statement, $key, $value){

		$statement->bindParam($key, $value);

	}

	 //Fim: Métodos que compoem o método query():


	 //Inicio: Método query():
	public function query($rowQuery, $params=array()){

		$stmt = $this->conn->prepare($rowQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;

	}
	 //Fim: Método query():

	 //Inicio: Método select():
	public function select($rowQuery, $params=array()):array{

		$stmt = $this->query($rowQuery, $params);

		return $stmt->fetchALL(PDO::FETCH_ASSOC);

	}

	 //Fim : Método select():

}

?>