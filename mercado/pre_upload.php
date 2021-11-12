<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Pre_upload
 Criado em Data.....: 07/12/2007
 Ultima Atualização : 13/07/2009

 DEUS SEJA LOUVADO
 -----------------------------------------
*/

include('aguarde.php');

include('titulo.php');

include_once("../config.php");

require("../funcoes2.php");


?>
<html>
<head>
<title><?=$Titulo;?></title>
<link rel="shortcut icon" href="../graphics/favicon.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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

<style type="text/css">
<!--
body {
	   SCROLLBAR-ARROW-COLOR: blue;
	   SCROLLBAR-BASE-COLOR: #FFC082
	   
}
.style19 {
	font-family: "Comic Sans MS";
	font-size: 20px;
	font-style: italic;
	color: #FFFFFF;
}

-->
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

<script language="JavaScript" type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>

</head>

<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFFFFF">

<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"><b><font color="#FF6600" face="Arial">Cadastro de Produto <font size="2">(portal da troca)</font> </font></b> </td>
      </tr>
    </table></td>
  </tr>
</table>

<br />
<br />

<table  width="100%"   style="height:417px"  border="0" cellpadding="0" cellspacing="0"  bgcolor="#FFFFFF"  ><tr><td valign="top">

<br />

<center><STRONG>Carregamento das fotos para o produto c&oacute;digo: <b><?php echo decode5t($HTTP_GET_VARS['cod_prod']); ?></b></STRONG></center>


                  
<p align="center"><a href="javascript:;" onClick="MM_openBrWindow('upload_foto.php?cod_prod=<?php echo decode5t($HTTP_GET_VARS['cod_prod']); ?>&num_foto=0','','width=510,height=225')"><img id="Image5" src="../graphics/botao_1.png"    border="0"       /></a></p>
  

<p align="center"><a href="javascript:;" onClick="MM_openBrWindow('upload_foto.php?cod_prod=<?php echo decode5t($HTTP_GET_VARS['cod_prod']); ?>&num_foto=1','','width=510,height=225')"><img id="Image5" src="../graphics/botao_2.png"    border="0"       /></a></p>


<p align="center"><a href="javascript:;" onClick="MM_openBrWindow('upload_foto.php?cod_prod=<?php echo decode5t($HTTP_GET_VARS['cod_prod']); ?>&num_foto=2','','width=510,height=225')"><img id="Image5" src="../graphics/botao_3.png"    border="0"       /></a></p>


<p align="center"><a href="javascript:;" onClick="MM_openBrWindow('upload_foto.php?cod_prod=<?php echo decode5t($HTTP_GET_VARS['cod_prod']); ?>&num_foto=3','','width=510,height=225')"><img id="Image5" src="../graphics/botao_4.png"    border="0"       /></a></p>


<p align="center"><a href="../meus_prod/meus_prod.php"><img id="Image5" src="../graphics/sair_fotos.png"    border="0"       /></a></p>
 </div> 
 </table>
</body>
</html>
<?
include('rodape.php');
?>