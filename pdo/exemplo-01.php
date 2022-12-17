<?php
/*Utilizando o PDO(PHP Data Object) */

//Instânciar um objeto do tipo PDO:
$conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1:3307", "root", ""); 

//Criar um stmt para consulta de dados no banco:
$stmt = $conn->prepare("SELECT * FROM tb_usuario ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC); //fetchALL() função que fatia linha por linha os dados para exibição:

//Fazer um consulta mais aprofundada:
foreach ($results as $row) {
		
		foreach($row as $key => $value){

			echo "<strong>".$key.":</strong>".$value."<br>";

		}

		echo "============================================<br>";


}



var_dump($results);

phpinfo();


?>