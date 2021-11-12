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

          move_uploaded_file($_FILES['upload_imagem']['tmp_name'],"../cadastro/fotos/".$imagem_final);

          $caminho_foto = $imagem_final;
          
	
if ($num_foto == 0){
    $alterar = @mysql_query("UPDATE tt_ser_01 SET foto_peq = 'fotos/$caminho_foto' WHERE id = '$id_user'");

}
elseif ($num_foto == 1){
    $alterar = @mysql_query("UPDATE tt_ser_01 SET foto_peq = 'cadastro/fotos/$caminho_foto' WHERE id = '$id_user'");
	
}
elseif ($num_foto == 2){
    $alterar = @mysql_query("UPDATE tt_ser_01 SET foto_peq = 'cadastro/fotos/$caminho_foto' WHERE id = '$id_user'");
	
}
elseif ($num_foto == 3){
    $alterar = @mysql_query("UPDATE tt_ser_01 SET foto_peq = 'cadastro/fotos/$caminho_foto' WHERE id = '$id_user'");
	
}
    @mysql_close($conexao);
	}

?>

<br /><br />
<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; ">

<table  width="524"   style="height:350px"  border="0" cellpadding="0" cellspacing="0"><tr><td valign="top">

<center><font style=" font-family: Arial; font-size: 18px;"><STRONG>Foto Alterada com Susseco !!!</STRONG></font></center>
<br /><br />
<center><a href="javascript:window.close();"><img id="Image5" src="../graphics/fechar.png"  border="0"       /></a></center>
</table>
</body>
