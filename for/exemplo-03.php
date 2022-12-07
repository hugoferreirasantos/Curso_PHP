<?php
// Mais um exemplo de uso do FOR criando um select com opições em HTML no PHP:

echo "<select>";

for($i=date("Y"); $i > date("Y")-100; $i--){
	echo '<option value = "'.$i.'">'.$i.'</option>';
}

echo "</select>";

?>