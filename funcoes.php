<?php 

function titulo(){

	echo("Calculando valores <br/>");
}



function somaValor($num1, $num2){
	$resp = $num1 + $num2;
	echo("A soma de $num1 e $num2 é $resp.");
}

$num1 = 10; $num2 = 20;

titulo();
somaValor($num1, $num2);


 ?>