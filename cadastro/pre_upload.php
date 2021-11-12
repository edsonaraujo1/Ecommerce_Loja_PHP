<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: layout do Sistema
 Criado em Data.....: 07/12/2007
 Ultima Atualização : 13/07/2009

 DEUS SEJA LOUVADO
 -----------------------------------------
*/

include_once("../config.php");

include('aguarde.php');

include('titulo.php');

// Abre Conexão com o MySql
include("../conexao.php");
// Chama o Banco de Dados

$link = @mysql_connect($host,$user,$pass)

    or die( require("../server.php"));

@mysql_select_db($db);


$id_user  = $HTTP_GET_VARS['cod_prod'];
  
$consulta14  = "SELECT * FROM tt_ser_01 WHERE id = '$id_user'";
					
$resultado14 = @mysql_query($consulta14);
					
$row14 = @mysql_fetch_array($resultado14);
					
$id_log     = @$row14["nome"]." ".@$row14["sobrenome"];


include("../funcoes2.php");


?>
<html>
<head>
<title><?=$Titulo;?></title>
<link rel="shortcut icon" href="../graphics/favicon.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>

<?
if ($browser == " MS Internet Explorer"){
?>

<style>
body {
	   BORDER-BOTTOM: #FFC082 3px ridge;
	   BORDER-LEFT: #FFC082 3px ridge;
	   BORDER-RIGHT: #FFC082 3px ridge;
	   BORDER-TOP: #FFC082 3px ridge;
	   SCROLLBAR-ARROW-COLOR: blue;
	   SCROLLBAR-BASE-COLOR: #FFC082
	   
}
</style>
<?
}
?>

<style>

.style19 {
	font-family: "Comic Sans MS";
	font-size: 20px;
	font-style: italic;
	color: #FFFFFF;
}

</style>

</head>

<body  style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFFFFF" >
<form style="margin-bottom: 0" id="Unit1" name="Unit1" method="post"  action="/cad_user_02_800_600.php">
<table  width="100%"   style="height:296px"  border="0" cellpadding="0" cellspacing="0"  bgcolor="#FFFFFF"  ><tr><td valign="top">

<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"><b><font color="#FF6600" face="Arial">Cadastro de Usuario <font size="2">(Compraai)</font> </font></b> </td>
      </tr>
    </table></td>
  </tr>
</table>

<br />

<center><img id="Image2" src="../graphics/foto_padrao65.jpg"  width="95"  height="105"  border="0"       /></center>
<br />

<center><STRONG>Incluir Fotos para.:</STRONG> <b><?=strtoupper($id_log);?></b></center><br /><br />

<center><a href="javascript:;" onClick="MM_openBrWindow('upload_foto.php?cod_prod=<?php echo $HTTP_GET_VARS['cod_prod']; ?>&num_foto=0','','width=510,height=225')"><img id="Image3" src="../graphics/botao_2.png"  width="215"  height="30"  border="0"       /></a></center><br /><br />

<center><a href="javascript:history.go(-1);"><a href="../principal.php"><img src="../graphics/retorno.png" width="30" height="31" border="0"></a></a></center>
<br />
<br />

</td></tr></table>
</form></body>
</html>

<?
include('rodape.php');
?>