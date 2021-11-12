<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Upload das Fotos
 Criado em Data.....: 07/12/2007
 Ultima Atualização : 13/07/2009

 DEUS SEJA LOUVADO
 -----------------------------------------
*/

include_once("../config.php");

require("../funcoes2.php");

?>
<html>
<head>
<title><?=$Titulo;?></title>
<link rel="shortcut icon" href="../graphics/favicon.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

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
	color: #000000;
}

-->
</style>
<?
}else{
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
	color: #ffffff;
}

-->
</style>
	
<?	
}
?>

</head>

<body>

<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; " bgcolor="#FFFFFF"   >

<table width="100%" height="52" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="100%" background="../graphics/forum_baner.png"><span class="style19">&nbsp;&nbsp;Incluir foto no Produto</span></td>
            </tr>
          </table>

<br />

<table  width="520"   style="height:350px"  border="0" cellpadding="0" cellspacing="0"  bgcolor="#FFFFFF"  ><tr><td valign="top">
<?
if ($num_foto == 0){
?>	
   <center><font style=" font-family: Arial; font-size: 22px;"><b>Incluir Foto do Protudo</b></font></center>
<?
}
if ($num_foto == 1){
?>	
   <center><font style=" font-family: Arial; font-size: 22px;"><b>Incluir 1o Foto do Protudo</b></font></center>
<?
}
if ($num_foto == 2){
?>	
   <center><font style=" font-family: Arial; font-size: 22px;"><b>Incluir 2o Foto do Protudo</b></font></center>
<?
}
if ($num_foto == 3){
?>	
   <center><font style=" font-family: Arial; font-size: 22px;"><b>Incluir 3o Foto do Protudo</b></font></center>
<?
}
?>   


<form action="upload_foto2.php" method="post" enctype="multipart/form-data" name="form1">
  <center><font style=" font-family: Arial; font-size: 18px;"><b>Foto.:</b></font>&nbsp;&nbsp;<input name="upload_imagem" type="file" id="upload_imagem"/></center>
  <br/>
  <input name="cod_prod" type="hidden" id="cod_prod" value="<?php echo decode5t($HTTP_GET_VARS['cod_prod']); ?>"/>
  <input name="num_foto" type="hidden" id="num_foto" value="<?php echo $HTTP_GET_VARS['num_foto']; ?>"/>
  <center><input type=image name="Submit" src="../graphics/salvar_fot.png"/>   <a href="javascript:window.close()"><img id="Image3" src="../graphics/fechar_fot.png"  width="148"  height="29"  border="0"       /></a></center>
  
</form>

</body>