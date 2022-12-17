<?php
//Estabelecendo a conexão com PDO:
$conn = new PDO("sqlsrv:Database=users;server=localhost\SQLEXPRESS02;ConnectionPooling=0", "sa","root");

//Criar um preparação para consulta:
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY usuario");

$stmt->execute();

//Resultado da consulta:
$results = $stmt->fetchALL(PDO::FETCH_ASSOC);


?>