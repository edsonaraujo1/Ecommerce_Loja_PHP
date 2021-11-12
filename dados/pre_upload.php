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


require("../funcoes2.php");


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
	   
}

.style19 {
	font-family: "Comic Sans MS";
	font-size: 20px;
	font-style: italic;
	color: #FFFFFF;
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

<table width="100%" height="46" border="0">
            <tr>
              <td width="100%" background="../graphics/forum_baner.png"><span class="style19">&nbsp;&nbsp;Cadastro de Usuário </span></td>
            </tr>
          </table>


<div align="left">&nbsp;&nbsp;&nbsp;</div>

<table width="507" border="0" align="center">
  <tr>
    <td width="74"><div align="center"><img src="../graphics/foto_padrao65.jpg" width="65" height="65"></div></td>
    <td width="423"><p align="center">      <br>
    Incluir Fotos para.: <b>EDSON DE ARAUJO</b></p>      
    <p align="center">&nbsp;</p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center"><a href="javascript:;" onClick="MM_openBrWindow('upload_foto.php?cod_prod=<?php echo $HTTP_GET_VARS['cod_prod']; ?>&num_foto=0','','width=500,height=200')"><img src="../graphics/botao_2.png" width="215" height="30" border="0"></a></div></td>
  </tr>
</table>
<br />
<center><a href='../principal.php'><img src='../graphics/retorno.png' border='0' /></a></center>
</body>
</html>
