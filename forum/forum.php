<?
include('aguarde.php');

include('titulo.php');

require_once("../config.php");

require("../funcoes2.php");

@session_start();
$ser_name3_c    = escapestrings(strtoupper($_SESSION["log_name_c"]));
$acesso_2       = escapestrings($_SESSION['data_log_2']);
$abrir_up       = $_SESSION['abrir_up'];

if (!empty($ser_name3_c)){

}else{
	$ser_name3_c = trim(strtoupper("Visitante"));
}

?>
<html>
<head>
<title><?=$Titulo;?></title>
<link rel="shortcut icon" href="../graphics/favicon.ico"/>

<style type="text/css">
<!--

.style19 {
	font-family: "Comic Sans MS";
	font-size: 20px;
	font-style: italic;
	color: #FFFFFF;
}

-->
</style>

</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"><b><font color="#FF6600" size="3" face="Arial">Forum Compraai</font></b></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td width="1%">            <img src="../graphics/px1.gif" width="10" height="10"><br>    </td>
    <td width="98%" valign="top">
	<!-- Inicioda do Layout -->

    <?
include("barrasup.php");

?>
    <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr bgcolor="#FFE2C6">
        <td width="57%"><div align="center"><font size="2"><b><font face="Verdana">Topico</font></b></font></div></td>
        <td width="23%"><div align="center"><b><font size="2" face="Verdana">Autor</font></b></div></td>
        <td width="20%"><div align="center"><font face="Verdana"><b><font size="2">Data</font></b></font></div></td>
      </tr>
      <?

$negrita = 1;

$consulta  = "SELECT * FROM msg WHERE  pai='0' AND ativa = '1' ORDER BY `topico` DESC";

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


if ($negrita==1){
    ?>
      <tr>
        <td valign="bottom"><img src="../graphics/espacador_tb.gif" width="10" height="10"><img src="../graphics/n.gif" width="15" height="11"><img src="../graphics/espacador_tb.gif" width="10" height="10"><font size="2" face="Arial"><a href='ler.php?pai=<?=$pai1;?>&res=0&titulo=<?=$titulo1;?>&topico=<?=$topico1;?>&codigo1=<?=$codigo1;?>'>
          <?=$titulo1;?>
          </a></font> <img src="../graphics/espacador_tb.gif" width="10" height="10"><img src="../graphics/icon_estrela_branco.png" width="15" height="15"><img src="../graphics/espacador_tb.gif" width="10" height="10"><font size="2" face="Arial"><b>(
          <?=$resposta;?>
          )</b></font></td>
        <td><div align="center"><font size="2" face="Arial">
            <?=$autor1;?>
        </font></div></td>
        <td><div align="center"><font size="2" face="Arial">
            <?=$data1;?>
        </font> </div></td>
      </tr>
      <? 
    $conta_p = $conta_p + 1;
    $rec_nu = $rec_nu + 1;
	                    
    $negrita = 0;		            
}else{

    ?>
      <tr bgcolor="#E5E5E5">
        <td valign="bottom"><img src="../graphics/espacador_tb.gif" width="10" height="10"><img src="../graphics/n.gif" width="15" height="11"><img src="../graphics/espacador_tb.gif" width="10" height="10"><font size="2" face="Arial"><a href='ler.php?pai=<?=$pai1;?>&res=0&titulo=<?=$titulo1;?>&topico=<?=$topico1;?>&codigo1=<?=$codigo1;?>'>
          <?=$titulo1;?>
          </a></font> <img src="../graphics/espacador_tb.gif" width="10" height="10"><img src="../graphics/icon_estrela_branco.png" width="15" height="15"><img src="../graphics/espacador_tb.gif" width="10" height="10"><font size="2" face="Arial"><b>(
          <?=$resposta;?>
          )</b></font></td>
        <td><div align="center"><font size="2" face="Arial">
            <?=$autor1;?>
        </font></div></td>
        <td><div align="center"><font size="2" face="Arial">
            <?=$data1;?>
        </font> </div></td>
      </tr>
      <? 
	$conta_p = $conta_p + 1;
	$rec_nu = $rec_nu + 1;
	                    
	$negrita = 1;		            
}
}
?>
    </table>
    <?

//include("barrasup.php");

include "barrainf.php";
?>
    &nbsp;
	
	<!-- Fim do Layout -->

    </td>
    <td width="1%"><div align="center"><img src="../graphics/px1.gif" width="8" height="10"></div></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td><div align="center"><img src="../graphics/retorno.png" width="30" height="31"><br>
    </div></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>

<?
include('rodape.php');
?>