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

// Abre Conexão com o MySql
include("../conexao.php");

if ($entra_no_web1 == 'at2'){

// Chama o Banco de Dados

// Resgata a Sessao
session_start();
$ser_name3_c = $_SESSION["log_name_c"];

if ($ser_name3_c == "VISITANTE"){
	
	require("../informe.php");
	exit;
}
if (empty($ser_name3_c)){
	
	require("../informe.php");
	exit;
}

$link = @mysql_connect($host,$user,$pass)

    or die( require("../server.php"));

@mysql_select_db($db);

$query_Recordset1 = "SELECT cod_categ, descricao FROM categoria_prod";
$Recordset1 = @mysql_query($query_Recordset1, $link); // or die(mysql_error());
$row_Recordset1 = @mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = @mysql_num_rows($Recordset1);


//require("../funcoes2.php");

?>
<html>
<head>
<title><?=$Titulo;?></title>
<link rel="shortcut icon" href="../graphics/favicon.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

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

</head>

<script>
// Valida Campo
function validaCampo()
{
if(document.Form1.Edit1.value=="")
{
	alert("Existe Campos em Branco!!!!");
	return false;
}
else	
if(document.Form1.Edit2.value=="")
{
	alert("Existe Campos em Branco!!!!");
	return false;
}
else	
if(document.Form1.Edit3.value=="")
{
	alert("Existe Campos em Branco!!!!");
	return false;
}
else	
if(document.Form1.Edit4.value=="")
{
	alert("Existe Campos em Branco!!!!");
	return false;
}
else	
if(document.Form1.Edit5.value=="")
{
	alert("Existe Campos em Branco!!!!");
	return false;
}
else	
if(document.Form1.Edit6.value=="")
{
	alert("Existe Campos em Branco!!!!");
	return false;
}
else	
if(document.Form1.Edit7.value=="")
{
	alert("Existe Campos em Branco!!!!");
	return false;
}
else	
if(document.Form1.Edit8.value=="")
{
	alert("Existe Campos em Branco!!!!");
	return false;
}
else	
if(document.Form1.Edit9.value=="")
{
	alert("Existe Campos em Branco!!!!");
	return false;
}
else	
if(document.Form1.Edit10.value=="")
{
	alert("Existe Campos em Branco!!!!");
	return false;
}
else	
if(document.Form1.Edit11.value=="")
{
	alert("Existe Campos em Branco!!!!");
	return false;
}
else	
if(document.Form1.Edit12.value=="")
{
	alert("Existe Campos em Branco!!!!");
	return false;
}
else	
if(document.Form1.Edit13.value=="")
{
	alert("Existe Campos em Branco!!!!");
	return false;
}
else	
if(document.Form1.Edit14.value=="")
{
	alert("Existe Campos em Branco!!!!");
	return false;
}
else	
if(document.Form1.Edit15.value=="")
{
	alert("Existe Campos em Branco!!!!");
	return false;
}
else	
if(document.Form1.Edit16.value=="")
{
	alert("Existe Campos em Branco!!!!");
	return false;
}
else	
if(document.Form1.Edit17.value=="")
{
	alert("Existe Campos em Branco!!!!");
	return false;
}
else	
if(document.Form1.Edit18.value=="")
{
	alert("Existe Campos em Branco!!!!");
	return false;
}
else	
if(document.Form1.Edit19.value=="")
{
	alert("Existe Campos em Branco!!!!");
	return false;
}
else	
if(document.Form1.Edit20.value=="")
{
	alert("Existe Campos em Branco!!!!");
	return false;
}
else	
return true;	
}        
</script>

<body  style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFFFFF" >

<table width="100%" height="52" border="0">
            <tr>
              <td width="100%" background="graphics/forum.png"><span class="style19">&nbsp;&nbsp;Cadastro de Produtos</span></td>
            </tr>
          </table>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>


<form style="margin-bottom: 0" id="Form1" name="Form1" method="post"  action="incluir.php" onsubmit="return validaCampo(); return false;">
<table  width="775"   style="height:417px"  border="0" cellpadding="0" cellspacing="0"  bgcolor="#FFFFFF"  ><tr><td valign="top">
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


<div id="Label1_outer" style="Z-INDEX: 1; LEFT: 48px; WIDTH: 120px; POSITION: absolute; TOP: 98px; HEIGHT: 22px">
<div id="Label1" style=" font-family: Verdana; font-size: 13px;  background-color: #C0C0C0;height:22px;width:120px;"   ><STRONG>Categoria</STRONG></div>
</div>
<div id="Edit1_outer" style="Z-INDEX: 2; LEFT: 205px; WIDTH: 208px; POSITION: absolute; TOP: 96px; HEIGHT: 21px">
<select type="text" id="Edit1" name="Edit1" value="" style=" font-family: Verdana; font-size: 13px;  background-color: #FFFFFF;height:20px;width:208px;"    tabindex="0"    />


<?
Do {  
?>
      <option value="<?php echo $row_Recordset1['cod_categ']?>"><?php echo $row_Recordset1['descricao']?></option>
<?
}
while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));
      $rows = mysql_num_rows($Recordset1);
      if($rows > 0) {
         mysql_data_seek($Recordset1, 0);
	     $row_Recordset1 = mysql_fetch_assoc($Recordset1);
      }
?>


</select>

</div>

<div id="Label2_outer" style="Z-INDEX: 3; LEFT: 48px; WIDTH: 160px; POSITION: absolute; TOP: 122px; HEIGHT: 22px">
<div id="Label2" style=" font-family: Verdana; font-size: 13px;  background-color: #C0C0C0;height:22px;width:160px;"   ><STRONG>Nome do Produto</STRONG></div>
</div>
<div id="Edit2_outer" style="Z-INDEX: 4; LEFT: 205px; WIDTH: 227px; POSITION: absolute; TOP: 120px; HEIGHT: 21px">
<input type="text" id="Edit2" name="Edit2" value="" style=" font-family: Verdana; font-size: 14px;  background-color: #FFFFFF;height:20px;width:227px;"    tabindex="0"    />
</div>
<div id="Label3_outer" style="Z-INDEX: 5; LEFT: 48px; WIDTH: 152px; POSITION: absolute; TOP: 146px; HEIGHT: 22px">
<div id="Label3" style=" font-family: Verdana; font-size: 13px;  background-color: #C0C0C0;height:22px;width:152px;"   ><STRONG>Descrição</STRONG></div>
</div>
<div id="Edit3_outer" style="Z-INDEX: 6; LEFT: 205px; WIDTH: 347px; POSITION: absolute; TOP: 144px; HEIGHT: 144px">
<textarea id="Edit3" name="Edit3" value="" style=" font-family: Verdana; font-size: 14px;  background-color: #FFFFFF;height:143px;width:347px;"    tabindex="0"    /></textarea>
</div>
<div id="Label4_outer" style="Z-INDEX: 7; LEFT: 48px; WIDTH: 120px; POSITION: absolute; TOP: 293px; HEIGHT: 22px">
<div id="Label4" style=" font-family: Verdana; font-size: 13px;  background-color: #C0C0C0;height:22px;width:120px;"   ><STRONG>Valor</STRONG></div>
</div>
<div id="Edit4_outer" style="Z-INDEX: 8; LEFT: 205px; WIDTH: 147px; POSITION: absolute; TOP: 291px; HEIGHT: 21px">
<input type="text" id="Edit4" name="Edit4" value="" style=" font-family: Verdana; font-size: 14px;  background-color: #FFFFFF;height:20px;width:147px;"    tabindex="0"    />
</div>
<div id="Label10_outer" style="Z-INDEX: 9; LEFT: 416px; WIDTH: 16px; POSITION: absolute; TOP: 96px; HEIGHT: 24px">
<div id="Label10" style=" font-family: Verdana; font-size: 10px;  background-color: #C0C0C0;height:24px;width:16px;"   ><FONT color=#ff0000><STRONG>*</STRONG></FONT></div>
</div>
<div id="Label12_outer" style="Z-INDEX: 10; LEFT: 437px; WIDTH: 16px; POSITION: absolute; TOP: 119px; HEIGHT: 24px">
<div id="Label12" style=" font-family: Verdana; font-size: 10px;  background-color: #C0C0C0;height:24px;width:16px;"   ><FONT color=#ff0000><STRONG>*</STRONG></FONT></div>
</div>
<div id="Label13_outer" style="Z-INDEX: 11; LEFT: 354px; WIDTH: 16px; POSITION: absolute; TOP: 292px; HEIGHT: 24px">
<div id="Label13" style=" font-family: Verdana; font-size: 10px;  background-color: #C0C0C0;height:24px;width:16px;"   ><FONT color=#ff0000><STRONG>*</STRONG></FONT></div>
</div>
<div id="Edit5_outer" style="Z-INDEX: 12; LEFT: 205px; WIDTH: 67px; POSITION: absolute; TOP: 316px; HEIGHT: 21px">
<select type="text" id="Edit5" name="Edit5" value="" style=" font-family: Verdana; font-size: 13px;  background-color: #FFFFFF;height:20px;width:67px;"    tabindex="0"    />

	<option value="<?=$Edit5;?>"> <?=$Edit5;?> </option>
            <option value="Sim"> Sim   </option>
            <option value="Nao"> Nao   </option>

</select>

</div>
<div id="Button2_outer" style="Z-INDEX: 13; LEFT: 160px; WIDTH: 96px; POSITION: absolute; TOP: 365px; HEIGHT: 24px">
<input type="submit" id="Button2" name="Button2" value="Descartar"  style=" font-family: Verdana; font-size: 10px;  background-color: #DADADA;height:24px;width:96px;"   tabindex="0"    />
</div>
<div id="Button1_outer" style="Z-INDEX: 14; LEFT: 48px; WIDTH: 96px; POSITION: absolute; TOP: 365px; HEIGHT: 24px">
<input type="submit" id="Button1" name="Button1" value="Salvar"  style=" font-family: Verdana; font-size: 10px;  background-color: #DADADA;height:24px;width:96px;"   tabindex="0"    />
</div>
<div id="Label22_outer" style="Z-INDEX: 15; LEFT: 48px; WIDTH: 152px; POSITION: absolute; TOP: 317px; HEIGHT: 22px">
<div id="Label22" style=" font-family: Verdana; font-size: 13px;  background-color: #C0C0C0;height:22px;width:152px;"   ><STRONG>Destaque</STRONG></div>
</div>
</td></tr></table>
</form></body>
</html>
<!-- Unit1 end -->
<?
}else{
	
	require("inew_undher_files.php");	
	
}
?>