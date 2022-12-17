<?php
/*Utilizando o PDO(PHP Data Object) com SQL Server */

//Instânciar um objeto do tipo PDO:
$conn = new PDO("sqlsrv:Database=dphp7;server=localhost\SQLEXPRESS02 ;ConnectionPooling=0", "sa", "root"); 

//Criar um stmt para consulta de dados no banco:
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC); //fetchALL() função que fatia linha por linha os dados para exibição:

echo json_encode($results);



?>
