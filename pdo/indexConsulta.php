
<?php require_once("conexaoSQLServer.php"); ?>

<DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Consulta com Banco de dados</title>
		<style>

			body{
				display: flex;
				justify-content: center;
				align-items: center;
			}

			table, th, tr, td{
				padding: 10px;
				font-size: 25px;
				border-collapse: collapse;
			}

			table, th{
				border:2px solid blue;
			}

			td {
	            border-bottom: 1px solid #8395a7 ;
	            border-right: 1px solid #8395a7;
        	}

		</style>
	</head>

	<body>
		<table>

			<thead>
				<tr>
					<th>ID</th>
					<th>USUARIO</th>
					<th>IDADE</th>
				</tr>
			</thead>

			<tbody> 
				<?php foreach ($results as $row):?>
				<tr>
					<td><?php echo $row['id']?></td>
					<td><?php echo $row['usuario'] ?></td>
					<td><?php echo $row['idade']?></td>
				</tr>
			<?php endforeach;?>
			</tbody>

		</table>
	</body>



</html>