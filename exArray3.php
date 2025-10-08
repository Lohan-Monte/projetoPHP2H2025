<?php 

$ma = array(
	array("Bruno",7),
	array("Matheus",8),
	array("Jorge", 7.5),
	array("José", 8.2),
	array("Carlos", 6.7),
	array("Sabrina", 9.3),
	array("Julia", 8.7),
	array("Amanda", 9),
	array("Lohan", 10),
	array("Pedro" , 7.5)
);

 foreach($ma as $i){
 	$somalinha = array_sum($i);
 	$somaSubArrays[] = $somalinha;
 }

 echo "\n";
 $somaGeral = array_sum($somaSubArrays);

 $somaGeral = $somaGeral / 10;
 	echo "A média da sala é: " . $somaGeral;
 	echo "<br/>";







 ?>