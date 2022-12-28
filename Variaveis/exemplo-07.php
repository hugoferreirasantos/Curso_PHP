<?php

$a = 5;
$b = 5;

function soma($a,$b){

	$soma = $a + $b;

	return $soma;
}

echo "<b>".soma($a,$b)."</b>";



?>

<style>
	
	body{
		background: blue;
		color: red;
	}

</style>


<p>
	<?php echo soma($a,$b)?>

</p>