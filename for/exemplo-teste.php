<?php
// Realizando teste com o FOR no PHP:

echo "<select>";

for($i = 0;$i <= 100;$i+=5){
	echo '<option value="'.$i.'">" '.$i.' "</option>';
}

echo "</select>";
?>