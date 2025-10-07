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
 
 
$mc = array(
	array(123, 77, 70),
	array(90, 74, 106),
	array(106, 52, 108)
);

$md = array(
	array(),
	array(),
	array()
);

for($linhas=0; $linhas<3; $linhas++){
	for($colunas=0; $colunas<3; $colunas++){
		$md[$linhas][$colunas] = $ma[$linhas][$colunas] + $mb[$linhas][$colunas] + $mc[$linhas][$colunas];
	}
}

print_r($md);


 ?>