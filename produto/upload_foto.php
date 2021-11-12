<?

include_once("../config.php");

require("../funcoes2.php");

?>
<html>
<head>
<title><?=$Titulo;?></title>
<link rel="shortcut icon" href="imagnes/favicon.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>


<style type="text/css">
.realupload {
      position: relative;
      float: right;
      top: -21px;
      right: 20px;
      opacity:0;
      -moz-opacity:0;
      filter:alpha(opacity:0);
}

.fakeupload {
      width: 330px;
      background: url("imagens/procurar.png") no-repeat 99% 51%;
      cursor: default;
      background-color: #FFFFFF;
}

input {
      background-color: #FFFFFF;
      border: 1px solid #e4e4e4;
      letter-spacing: 1px;
      font-size: 11px;
      color: #333;
      padding-left: 5px;
      padding-top: 5px;
      padding-bottom: 5px;
      margin-left: 5px;
      height: 15px;
      vertical-align: middle;
}

/*ABAIXO SÓ É NECESSÁRIO PARA CRIAR O EXEMPLO*/
div {
	margin: 0 auto;
	width: 368px;
}

body {
	background-color: #f7f7f7;
}

label {
	font-size: 15px;
	font-family: Verdana;
	padding: 10px;
}
</style>

<style>
body {
	BORDER-BOTTOM: #FFC082 3px ridge; BORDER-LEFT: #FFC082 3px ridge; BORDER-RIGHT: #FFC082 3px ridge; BORDER-TOP: #FFC082 3px ridge
}
</style>
<style>
body {
	SCROLLBAR-ARROW-COLOR: blue; SCROLLBAR-BASE-COLOR: #FFC082
}
</style>

</head>

<body>

<div id="Image1_outer" style="Z-INDEX: 4; LEFT: 5px; WIDTH: 780px; POSITION: absolute; TOP: 5px; HEIGHT: 84px">
<div id="Image1_container" style=" width: 780;  height: 84; overflow: hidden;" ><img id="Image1" src="imagens/forum.png"  width="777"  height="44"  border="0"       /></div>
</div>

<div id="Label1_outer" style="Z-INDEX: 1; LEFT: 120px; WIDTH: 450px; POSITION: absolute; TOP: 55px; HEIGHT: 350px">

<table  width='500' align="center" ><tr><td valign="top">



<form action="upload_foto2.php" method="post" enctype="text/plain" name="form1">
	<label>Selecione o arquivo</label>
	<input id="fakeupload" name="upload_imagem" class="fakeupload"  type="text" />
	<input id="realupload" name="upload_imagem" class="realupload" type="file" onchange="this.form.fakeupload.value = this.value;" />


  <br/>
  <input name="cod_prod" type="hidden" id="cod_prod" value="<?php echo $HTTP_GET_VARS['cod_prod']; ?>"/>
  <input name="num_foto" type="hidden" id="num_foto" value="<?php echo $HTTP_GET_VARS['num_foto']; ?>"/>
  <input type="submit" name="Submit" value="Enviar">
</form>

</table>
</div>
</body>