<?php

/**
 * @author holodek
 * @copyright 2011
 */
/* Define as cores do site (valores em RGB hexadecimal): */
$fonte_padrao 			= "Verdana, Arial, Helvetica";
$tamanho_fonte_padrao 	= "2";

$valor_positivo = $positivo;
$total_positivo = "200";

if ($positivo > 0 and $positivo < 3){
	$valor_positivo = 3;
}
$resultado_positivo = intval(($valor_positivo / $total_positivo) * 100);
$resultado2_positivo = intval(($valor_positivo / $total_positivo) * 100);
//Exibe como resultado: "25%"
if ($resultado2_positivo > 30){
	$resultado2_positivo = 30;
}

echo "<font face=1\"$fonte_padrao\" size=\"$tamanho_fonte_padrao\">";
echo "<b>$resultado_positivo"."%</b>";
echo "</font>&nbsp;&nbsp;";

if ($positivo <= 3){

   echo "<img src=../graphics/barra_positiva.jpg width= 1 height=10>";
   
}else{
	
   echo "<img src=../graphics/barra_positiva.jpg width= $resultado2_positivo height=10>";
	
}   
echo "<font color='#ffffff'>";
?>