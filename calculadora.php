<?php 
$opcao = 2;

$num1 = 20; $num2 = 13; 

$op = "Subtração";

if($opcao == 1){
$respostaSoma = somaValor($num1, $num2);
}elseif($opcao == 2){
$repostaSub = subtraiValor($num1, $num2);
}elseif($opcao == 3){
$respostaMulti = multiplicaValor($num1, $num2);
}elseif($opcao==4){
$respostaDivisao = divideValor($num1, $num2);
}else{
	echo("Opção Inválida");
}


function somaValor($num1, $num2){
		return ($num1 + $num2);
}
function subtraiValor($num1, $num2){
		return($num1 - $num2);
}
function multiplicaValor($num1, $num2){
	return($num1 * $num2);	
}
function divideValor($num1, $num2){
	return($num1 / $num2);	
}


echo("Os números escolhidos foram $num1 e $num2 <br/>");
echo("A operação escolhida foi $op. <br/>");
echo("O resultado foi $respostaSub. <br/>");

 ?>