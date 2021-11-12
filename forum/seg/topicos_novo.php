<head>
<style type="text/css">
<!--

.style19 {
	font-family: "Comic Sans MS";
	font-size: 20px;
	font-style: italic;
	color: #FFFFFF;
}
.style20 {
	color: #000000;
	font-weight: bold;
	font-size: 14px;
}

-->
</style>

</style>
</head>

<table width="100%" height="52" border="0">
            <tr>
              <td width="100%" background="../graphics/forum_baner.png"><span class="style19">&nbsp;&nbsp;iSysMP Forum</span></td>
            </tr>
          </table>
          

<?
include("barrasup.php");

?>

<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td width="57%"><div align="center"><font size="2"><b><font face="Verdana">Topico</font></b></font></div></td>
    <td width="23%"><div align="center"><b><font size="2" face="Verdana">Autor</font></b></div></td>
    <td width="20%"><div align="center"><font face="Verdana"><b><font size="2">Data</font></b></font></div></td>
  </tr>


<?

$consulta  = "SELECT * FROM msg WHERE  pai='0' ORDER BY `topico` DESC";

$resultado = @mysql_query($consulta);

       while ($linha = @mysql_fetch_array($resultado))
       {

		    $id_conf1 = $linha["id"];
			$titulo1  = $linha["titulo"];
			$autor1   = $linha["autor"];
			$data1    = $linha["data"];
			$pai1     = $linha["pai"];
			$topico1  = $linha["topico"];
			$codigo1  = $linha["codigo"];
			$resposta = $linha["resposta"];

		
?>

  <tr>
    <td valign="bottom"><img src="../graphics/espacador_tb.gif" width="10" height="10"><img src="../graphics/n.gif" width="15" height="11"><img src="../graphics/espacador_tb.gif" width="10" height="10"><font size="2" face="Arial"><a href='ler.php?pai=<?=$pai1;?>&res=0&titulo=<?=$titulo1;?>&topico=<?=$topico1;?>&codigo1=<?=$codigo1;?>'><?=$titulo1;?></a></font> <img src="../graphics/espacador_tb.gif" width="10" height="10"><img src="../graphics/icon_estrela_branco.gif" width="15" height="15"><img src="../graphics/espacador_tb.gif" width="10" height="10"><font size="2" face="Arial"><b>(<?=$resposta;?>)</b></font></td>
    <td><div align="center"><font size="2" face="Arial"><?=$autor1;?></font></div></td>
    <td><div align="center"><font size="2" face="Arial"><?=$data1;?></font> </div></td>
  </tr>
<?  
}
?>
  
</table>
  
<?

//include("barrasup.php");

include "barrainf.php";
?>