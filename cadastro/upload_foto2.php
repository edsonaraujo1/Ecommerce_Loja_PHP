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

require("../funcoes2.php");

?>
<html>
<head>
<title><?=$Titulo;?></title>
<link rel="shortcut icon" href="../graphics/favicon.ico"/>

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

</head>
</html>
<? 
  include("../conexao.php");
 
$link = @mysql_connect($host,$user,$pass);

@mysql_select_db($db);


   $id_user  = $HTTP_POST_VARS["cod_prod"];
   $num_foto = $HTTP_POST_VARS["num_foto"];

	list($width, $height) = getimagesize($_FILES['upload_imagem']['tmp_name']);



	if (!eregi("^image\/(pjpeg|jpeg|gif)$", $_FILES['upload_imagem']['type']))
	
	{      
     ?>
           <script language="javascript">
		   alert("Tipo de arquivo não permitido!\nApenas JPG ou GIF.");
		   window.history.go(-1);
		   stop;
		   </script>
	<?php
	}

	elseif($width > 600 || $height > 600)

    {
     ?>
           <script language="javascript">
		   alert("Imagem muito grande!\nTem que ter no máximo 600 X 120 pixels.");
		   window.history.go(-1);
		   stop;
		   </script>
	<?php
    }

	elseif ($_FILES['upload_imagem']['size'] > 20000000)

	{
     ?>
           <script language="javascript">
		   alert("Arquivo muito grande!\nTem que ter até 100k.");
		   window.history.go(-1);
		   stop;
		   </script>
	<?php
	}

	else
	{
          $cripto = substr(md5(uniqid(time())), 0, 10);

          $imagem = $_FILES['upload_imagem']['name'];

          $imagem_final = $cripto.$imagem;

          move_uploaded_file($_FILES['upload_imagem']['tmp_name'],"fotos/".$imagem_final);

          $caminho_foto = $imagem_final;
	
if ($num_foto == 0){
    $alterar = @mysql_query("UPDATE tt_ser_01 SET foto_peq = 'fotos/$caminho_foto' WHERE id = '$id_user'");

}
elseif ($num_foto == 1){
    $alterar = @mysql_query("UPDATE tt_ser_01 SET foto_peq = 'fotos/$caminho_foto' WHERE id = '$id_user'");
	
}
elseif ($num_foto == 2){
    $alterar = @mysql_query("UPDATE tt_ser_01 SET foto_peq = 'fotos/$caminho_foto' WHERE id = '$id_user'");
	
}
elseif ($num_foto == 3){
    $alterar = @mysql_query("UPDATE tt_ser_01 SET foto_peq = 'fotos/$caminho_foto' WHERE id = '$id_user'");
	
}
    @mysql_close($conexao);
	}

?>

<html>
<head>
<title><?=$Titulo;?></title>
<link rel="shortcut icon" href="../graphics/favicon.ico"/>

<?
if ($browser == " MS Internet Explorer"){
?>

<style>
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
</head>
</html>

<body  style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFFFFF" >

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

<center><img id="Image2" src="../graphics/ok.gif"  width="64"  height="87"  border="0"/></center>
<center><STRONG>Foto incluida no Cadastro com Sucesso !!!</STRONG></center><br />
<center><a href="javascript:window.close()"><img id="Image3" src="../graphics/fechar_fot.png"  width="148"  height="29"  border="0"       /></a></center>
</body>
