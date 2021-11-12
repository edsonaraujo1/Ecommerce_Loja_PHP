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
<link rel="shortcut icon" href="imagnes/favicon.ico"/>
</head>
</html>
<? 
  include("../conexao.php");
 
$link = @mysql_connect($host,$user,$pass);

@mysql_select_db($db);


   $cod_prod = $HTTP_POST_VARS["cod_prod"];
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

          move_uploaded_file($_FILES['upload_imagem']['tmp_name'],"../fotos/".$imagem_final);

          $caminho_foto = $imagem_final;
	
if ($num_foto == 0){
    $alterar = @mysql_query("UPDATE produto SET fot_peq = 'fotos/$caminho_foto' WHERE cod_prod = '$cod_prod'");

}
elseif ($num_foto == 1){
    $alterar = mysql_query("UPDATE produto SET fot_1 = 'fotos/$caminho_foto' WHERE cod_prod = '$cod_prod'");
	
}
elseif ($num_foto == 2){
    $alterar = mysql_query("UPDATE produto SET fot_2 = 'fotos/$caminho_foto' WHERE cod_prod = '$cod_prod'");
	
}
elseif ($num_foto == 3){
    $alterar = mysql_query("UPDATE produto SET fot_3 = 'fotos/$caminho_foto' WHERE cod_prod = '$cod_prod'");
	
}
    @mysql_close($conexao);
	}

?>


<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFC082">

<table  width="380"   style="height:350px"  border="0" cellpadding="0" cellspacing="0"  bgcolor="#FFC082"  ><tr><td valign="top">
<div id="Shape1_outer" style="Z-INDEX: 0; LEFT: 5px; WIDTH: 380px; POSITION: absolute; TOP: 6px; HEIGHT: 350px">
<script type="text/javascript">
  var Shape1_Canvas = new jsGraphics("Shape1_outer");
  Shape1_Canvas.setColor("#C0C0C0");
  Shape1_Canvas.fillRect(1, 1, 470 - 1, 365 - 1);
  Shape1_Canvas.fillRect(1, 1, 470 - 1 + 1, 365 - 1 + 1);
  Shape1_Canvas.setStroke(0);
  Shape1_Canvas.setColor("#C0C0C0");
  Shape1_Canvas.drawRect(1, 1, 470 - 1 + 1, 365 - 1 + 1);
  Shape1_Canvas.paint();
</script>

</div>

<div id="Label1_outer" style="Z-INDEX: 1; LEFT: 35px; WIDTH: 100px; POSITION: absolute; TOP: 98px; HEIGHT: 30px">
<div id="Label1" style=" font-family: Verdana; font-size: 16px;  background-color: #C0C0C0;height:30px;width:400px;"  align="Center"   ><P><STRONG>Foto incluida no cadastrados com Susseco !!!</STRONG></P></div>
</div>

<div id="Image5_outer" style="Z-INDEX: 3; LEFT: 165px; WIDTH: 192px; POSITION: absolute; TOP: 198px; HEIGHT: 100px">
<div id="Image5_container" style=" width: 192;  height: 122; overflow: hidden;" ><a href="javascript:window.close();"><img id="Image5" src="imagens/fechar.png"  border="0"       /></a></div>
</div>
</table>
</body>