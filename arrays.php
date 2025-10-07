<?php 

$ma = array(
	array(25, 12, 35),
	array(85, 47, 98),
	array(32, 38, 105)
);

$mb = array(
	array(98, 65, 35),
	array(5, 27, 8),
	array(74, 14, 3)
);
 
 
$linhas = count($ma);
$colunas = count($ma);


$matrizResultado = [];

for ($i = 0; $i < $linhas; $i++) {
  
    for ($j = 0; $j < $colunas; $j++) {
    
        $matrizResultado[$i][$j] = $ma[$i][$j] + $mb[$i][$j];
    }
}

$linhas1 = count($mb);
$colunas1 = count($mb);

for ($i = 0; $i < $linhas1; $i++) {
    
    for ($j = 0; $j < $colunas1; $j++) {
        
        $matrizResultado[$i][$j] = $ma[$i][$j] + $mb[$i][$j];
    }
}

print_r($matrizResultado);

 ?>