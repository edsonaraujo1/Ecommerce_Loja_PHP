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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
</head>

<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFC082">


<table  width="775"   style="height:417px"  border="0" cellpadding="0" cellspacing="0"  bgcolor="#FFC082"  ><tr><td valign="top">
<div id="Shape1_outer" style="Z-INDEX: 0; LEFT: 5px; WIDTH: 765px; POSITION: absolute; TOP: 6px; HEIGHT: 417px">
<script type="text/javascript">
  var Shape1_Canvas = new jsGraphics("Shape1_outer");
  Shape1_Canvas.setColor("#C0C0C0");
  Shape1_Canvas.fillRect(1, 1, 779 - 1, 410 - 1);
  Shape1_Canvas.fillRect(1, 1, 779 - 1 + 1, 410 - 1 + 1);
  Shape1_Canvas.setStroke(0);
  Shape1_Canvas.setColor("#C0C0C0");
  Shape1_Canvas.drawRect(1, 1, 779 - 1 + 1, 410 - 1 + 1);
  Shape1_Canvas.paint();
</script>

</div>

<div id="Image1_outer" style="Z-INDEX: 16; LEFT: 6px; WIDTH: 760px; POSITION: absolute; TOP: 6px; HEIGHT: 84px">
<div id="Image1_container" style=" width: 779;  height: 84; overflow: hidden;" ><img id="Image1" src="imagens/forum.png"  width="784"  height="84"  border="0"       /></div>
</div>

<div id="Shape2_outer" style="Z-INDEX: 2; LEFT: 5px; WIDTH: 700px; POSITION: absolute; TOP: 95px; HEIGHT: 217px">
<P align="center"><STRONG>Carregamento das fotos para o produto c&oacute;digo: <b><?php echo $HTTP_GET_VARS['cod_prod']; ?></b></STRONG> </p>

<p align="center"><a href="upload_foto.php?cod_prod=<?php echo $HTTP_GET_VARS['cod_prod']; ?>&num_foto=0"><img id="Image5" src="imagens/botao_1.PNG"    border="0"       /></a></p>
  

<p align="center"><a href="upload_foto.php?cod_prod=<?php echo $HTTP_GET_VARS['cod_prod']; ?>&num_foto=1"><img id="Image5" src="imagens/botao_2.PNG"    border="0"       /></a></p>


<p align="center"><a href="upload_foto.php?cod_prod=<?php echo $HTTP_GET_VARS['cod_prod']; ?>&num_foto=2"><img id="Image5" src="imagens/botao_3.PNG"    border="0"       /></a></p>


<p align="center"><a href="upload_foto.php?cod_prod=<?php echo $HTTP_GET_VARS['cod_prod']; ?>&num_foto=3"><img id="Image5" src="imagens/botao_4.PNG"    border="0"       /></a></p>
 </div> 
 </table>
</body>
</html>
