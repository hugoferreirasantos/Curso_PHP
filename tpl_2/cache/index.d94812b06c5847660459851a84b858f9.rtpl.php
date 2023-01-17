<?php if(!class_exists('Rain\Tpl')){exit;}?><h1>Hello <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>

<p>A data de hoje é: <?php echo htmlspecialchars( $date, ENT_COMPAT, 'UTF-8', FALSE ); ?>. </p>