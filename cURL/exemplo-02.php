<?php
//Fazendo a chamada do arquivo config.php:
require_once("config.php");

//Utilizando o Método insert_endereco( ) da class Endereco:
//$cep = "20230010";
$end = new Endereco();
//$end->insert_endereco($cep);
//echo $end; 

//Utilizando o Método getList():
//$end = new Endereco();
$results = $end->getList();
//echo json_encode($endereco);

//Utilizando o método search:
$result = $end->search("23078-001");


?>



<!--Aplicando tags html para melhorar a vizualização-->

<DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Consulta no banco de dados</title>
		<style>
			body,p{
				font-family: Arial, Helvetica, sans-serif;
				font-style: italic;
				display: flex;
				justify-content:center;
				align-items:center;
			}

			table,th,tr,td{
				padding: 10px;
				font-size: 25px;
				border-collapse: collapse;
			}

			table, th{
				border: 2px solid blue;
			}

			td{
				border-bottom: 1px solid ;
				border-right: 1px solid ;
			}

		</style>
	</head>

	<body>

		<p><b><u>Consulta geral de dados no banco de dados: </u></b></p>

		<!--Tabela de consulta geral do banco: -->
		<table>
			<thead>
			<tr>
				<th>IDENDERECO</th>
				<th>CEP</th>
				<th>CIDADE</th>
				<th>LOGRADOURO</th>
				<th>BAIRRO</th>
				<th>UF</th>
				<th>DDD</th>
				<th>DTCADASTRO</th>
			</tr>
		</thead>

		<tbody>

			<?php foreach ($results as $row): ?>
				<tr>
					<td><?=$row['idendereco']?></td>
					<td><?=$row['cep']?></td>
					<td><?=$row['cidade']?></td>
					<td><?=$row['logradouro']?></td>
					<td><?=$row['bairro']?></td>
					<td><?=$row['uf']?></td>
					<td><?=$row['ddd']?></td>
					<td><?=$row['dtcadastro']?></td>
				</tr>
				
			<?php endforeach; ?>
			
		</tbody>
		</table>

		<br>
		<br>

		<p><b><u>Pesquisa por CEP no banco de dados: </u></b></p>

		<!--Tabela de pesquisa por cep-->

		<table>
			<thead>
				<tr>
					<th>IDENDERECO</th>
					<th>CEP</th>
					<th>CIDADE</th>
					<th>LOGRADOURO</th>
					<th>BAIRRO</th>
					<th>UF</th>
					<th>DDD</th>
					<th>DTCADASTRO</th>
				</tr>
			</thead>

			<tbody>
				<?php foreach($result as $row): ?>
					<tr>
						<td><?=$row['idendereco']?></td>
						<td><?=$row['cep']?></td>
						<td><?=$row['cidade']?></td>
						<td><?=$row['logradouro']?></td>
						<td><?=$row['bairro']?></td>
						<td><?=$row['uf']?></td>
						<td><?=$row['ddd']?></td>
						<td><?=$row['dtcadastro']?></td>
					</tr>
				<?php endforeach; ?>	
			</tbody>
		</table>


		

	</body>

</html>
