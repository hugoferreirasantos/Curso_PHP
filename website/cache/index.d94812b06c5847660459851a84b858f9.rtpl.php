<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
	<head></head>

	<body>
		
		<h1>Olá <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?> <?php echo htmlspecialchars( $sobrenome, ENT_COMPAT, 'UTF-8', FALSE ); ?> com vai?</h1>

		<p>Este é um E-mail teste por isso peço que não responda </p>
		<br>
		<p>Atenciosamente. </p>
		<br>
		<p>Data: <?php echo htmlspecialchars( $date, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>


	</body>

</html>