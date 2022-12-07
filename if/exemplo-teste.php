<?php
// Teste utilizando estruturas condicionais:
$meuSalario = 1000;

$salarioMinimo = 1112;
$salarioMedio = 3200;
$salarioMaior = 15000;

// IF, ELSE , ELSE IF:
if($meuSalario < $salarioMinimo){
	echo "Salário $meuSalario abaixo do Minimo $salarioMinimo";
}else if($meuSalario < $salarioMedio){
	echo "Salário $meuSalario, abaixo do Médio $salarioMedio";
}else if($meuSalario < $salarioMaior){
	echo "Salário $meuSalario, abaixo do Maior $salarioMaior";
}else{
	echo "Salário $meuSalario, acima do Maior Salário $salarioMaior";
}

// Estrutura Condicional ternário:
echo "<br>";

echo ($meuSalario < $salarioMinimo)?"Meu Salario $meuSalario, abaixo do Minimo $salarioMinimo":"Meu Salario $meuSalario é maior que, Salario Minimo $salarioMinimo";


?>