<?php

/**
 * @author holodek
 * @copyright 2011
 */
/* Define as cores do site (valores em RGB hexadecimal): */
$fonte_padrao 			= "Verdana, Arial, Helvetica";
$tamanho_fonte_padrao 	= "2";

$valor_positivo = "3";
$total_positivo = "400";

$resultado_positivo = intval(($valor_positivo / $total_positivo) * 100);
$resultado2_positivo = intval(($valor_positivo / $total_positivo) * 100) - 70;
//Exibe como resultado: "25%"
if ($resultado2_positivo > 30){
	$resultado2_positivo = 30;
}
echo "<font face=1\"$fonte_padrao\" size=\"$tamanho_fonte_padrao\">";
echo "$resultado_positivo"."%";
echo "<br></font>";
echo "<img src=../graphics/barra_positiva.jpg width= $resultado2_positivo height=10>";
echo "<br><br>";

echo $resultado2_positivo;

echo "<br><br>";

$valor_negativo = "0";
$total_negativo = "200";

$resultado_negativo = intval(($valor_negativo / $total_negativo) * 100);
$resultado2_negativo = intval(($valor_negativo / $total_negativo) * 100);
//Exibe como resultado: "25%"
echo "<font face=1\"$fonte_padrao\" size=\"$tamanho_fonte_padrao\">";
echo "$resultado_negativo"."%";
echo "<br></font>";
echo "<img src=../graphics/barra_negativo.jpg width= $resultado2_negativo height=10>";
echo "<br><br>";


echo " <br><br> 2º";

$max = 1; /* aqui o valor máximo */
$now = 100; /* e aqui o valor atual */

$primeiro = 100 * $now; /* aqui multiplicamos o 100 pelo número que tem, como na explicação */
$n = $primeiro / $max; /* e aqui passamos o 2 dividindo */
echo "O resultado foi: ".number_format($n, 2, ',', '')." %<br>"; /* aqui usamos o number_format() para limitar a quantidade de casas decimais */







/* Define as cores do site (valores em RGB hexadecimal): */
$barra                  = "#000000";   // cores do site
$lado                   = "#0066cc";   // cores do site
$cor_corpo              = "#FFFFFF";   // cores do site
$sub_barra              = "#0099cc";   // cores do site
$sub_corpo              = "#336699";   // cores do site
$borda                  = "#000000";   // cores do site
$fonte_padrao 			= "Verdana, Arial, Helvetica";
$tamanho_fonte_padrao 	= "2";
$cor_fonte_padrao 		= "#000000";

$y = 100;
$qtdcampos_enq = 1;
$valorcampos[$y] = 30;

//aqui montamos a barra
echo "<div id=\"Layer2\" style=\"width:".$n. "%; height:11px; z-index:1; background-color: #009966; layer-background-color: #009966; border: 1px none #000000;\"></div>";


			for ($y = 0; $y < $qtdcampos_enq; $y++)
			{
				$rcampos = $valorcampos[$y] * 100;
				$restor[$y] = $rcampos / $total;
				$restor[$y] = (int) $restor[$y];
				$resultados_enquete .= "<tr>\n";
				$resultados_enquete .= "<td width=\"100\"><font face=\"$fonte_padrao\" size=\"$tamanho_fonte_padrao\" color=\"#000000\">$campos[$y]:<br><img src=../graphics/barra.jpg width=$restor[$y] height=15>$restor[$y]%.</font></td>";
				$resultados_enquete .= "</tr></div>";
			}
		$resultados_enquete .= "</table>";

echo $resultados_enquete."<br><br>";


$res1 = 1;
$res2 = 4;



$total = $res1 + $res2;
$perc1 = ($res1 * 100)/$total;
$res1_fotmatado = number_format($res1,2,".",",");
$perc2 = ($res2 * 100)/$total;
$res2_formatado = number_format($res2,2,".",","); 


//para visualizar as barras usa o esquema de DIV com css

 print "Total de Votos 1:" .$res1_formatado. "<br>";
 print "<div id=\"Layer2\" style=\"width:".$res1. "%; height:11px; z-index:1; background-color: #009966; layer-background-color: #009966; border: 1px none #000000;\"></div><BR>";
 print "Total de Votos 2:" .$res2_formatado. "<br>";
 print "<div id=\"Layer2\" style=\"width:".$res2. "%; height:11px; z-index:1; background-color: #009966; layer-background-color: #009966; border: 1px none #000000;\"></div><P>";
 print "Total de votos computados:" .number_format($total,2,".",","). "<br>";


?>