<?php

/**
 * @author holodek
 * @copyright 2011
 */
/* Define as cores do site (valores em RGB hexadecimal): */
$fonte_padrao 			= "Verdana, Arial, Helvetica";
$tamanho_fonte_padrao 	= "2";

$valor_negativo = $negativo;
$total_negativo = "200";

if ($negativo > 0 and $negativo < 3){
	$valor_negativo = 3;
}
$resultado_negativo = intval(($valor_negativo / $total_negativo) * 100);
$resultado2_negativo = intval(($valor_negativo / $total_negativo) * 100);
//Exibe como resultado: "25%"
if ($resultado2_positivo > 30){
	$resultado2_positivo = 30;
}

echo "<font face=1\"$fonte_padrao\" size=\"$tamanho_fonte_padrao\">";
echo "<b>$resultado_negativo"."%<b>";
echo "</font>&nbsp;&nbsp;";

if ($negativo <= 3){
	
    echo "<img src=../graphics/barra_negativo.jpg width=1 height=10>";

}else{

    echo "<img src=../graphics/barra_negativo.jpg width= $resultado2_negativo height=10>";
    
}
echo "<font color='#ffffff'>";
?>