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
include_once('../config.php');

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


require("../funcoes2.php");

?>
<html>
<head>
<title><?=$Titulo;?></title>
<link rel="shortcut icon" href="../graphics/favicon.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<!-- TinyMCE -->
<script type="text/javascript" src="../jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example word content CSS (should be your site CSS) this one removes paragraph margins
		content_css : "css/word.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
<!-- /TinyMCE -->

<style>
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


<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; " bgcolor="#FFFFFF">


<table width="100%" height="52" border="0">
            <tr>
              <td width="100%" background="../graphics/forum_baner.png"><span class="style19">&nbsp;&nbsp;Cadastro de Produtos</span></td>
            </tr>
          </table>

		  <p>&nbsp;</p>
		  <p>&nbsp;</p>


<form style="margin-bottom: 0" id="Form1" name="Form1" method="post"  action="incluir.php" onsubmit="return validaCampo(); return false;">
<table  width="495"   style="height:752px"  border="0" cellpadding="0" cellspacing="0"  bgcolor="#FFFFFF"  ><tr><td valign="top">
<div id="Label1_outer" style="Z-INDEX: 1; LEFT: 16px; WIDTH: 144px; POSITION: absolute; TOP: 64px; HEIGHT: 16px">
<div id="Label1" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:16px;width:144px;"   >Categoria do Produto.:</div>
</div>
<div id="Edit1_outer" style="Z-INDEX: 2; LEFT: 163px; WIDTH: 200px; POSITION: absolute; TOP: 62px; HEIGHT: 21px">
<select type="text" id="Edit1" name="Edit1" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:200px;"    tabindex="0"    >

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
<div id="Label2_outer" style="Z-INDEX: 3; LEFT: 16px; WIDTH: 392px; POSITION: absolute; TOP: 87px; HEIGHT: 32px">
<div id="Label2" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:32px;width:392px;"   ><center><STRONG>Anuncie seu produto na categoria correta e garanta mais vendas<BR>A venda de Produto pirata é crime.</STRONG></center></div>
</div>
<div id="Label3_outer" style="Z-INDEX: 4; LEFT: 16px; WIDTH: 144px; POSITION: absolute; TOP: 120px; HEIGHT: 16px">
<div id="Label3" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:16px;width:144px;"   >Titulo&nbsp;do Produto.:</div>
</div>
<div id="Edit2_outer" style="Z-INDEX: 5; LEFT: 163px; WIDTH: 200px; POSITION: absolute; TOP: 118px; HEIGHT: 21px">
<input type="text" id="Edit2" name="Edit2" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:200px;"    tabindex="1"    />
</div>
<div id="Label4_outer" style="Z-INDEX: 6; LEFT: 16px; WIDTH: 144px; POSITION: absolute; TOP: 144px; HEIGHT: 16px">
<div id="Label4" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:16px;width:144px;"   >Tipo&nbsp;de Produto.:</div>
</div>
<div id="Edit3_outer" style="Z-INDEX: 7; LEFT: 163px; WIDTH: 93px; POSITION: absolute; TOP: 142px; HEIGHT: 21px">
<select type="text" id="Edit3" name="Edit3" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:93px;"    tabindex="2"    />

	<option value="<?=$Edit3;?>"> <?=$Edit3;?> </option>
            <option value="USADO"> USADO   </option>
            <option value="NOVO"> NOVO   </option>

</select>

</div>
<div id="Label5_outer" style="Z-INDEX: 8; LEFT: 16px; WIDTH: 144px; POSITION: absolute; TOP: 168px; HEIGHT: 16px">
<div id="Label5" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:16px;width:144px;"   >Peso Aproximado.:</div>
</div>
<div id="Edit4_outer" style="Z-INDEX: 9; LEFT: 163px; WIDTH: 93px; POSITION: absolute; TOP: 166px; HEIGHT: 21px">
<input type="text" id="Edit4" name="Edit4" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:93px;"    tabindex="3"    />
</div>
<div id="Label6_outer" style="Z-INDEX: 10; LEFT: 16px; WIDTH: 216px; POSITION: absolute; TOP: 192px; HEIGHT: 16px">
<div id="Label6" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:16px;width:216px;"   ><STRONG><FONT color=#ff8000>DESCRICAO DO PRODUTO</FONT></STRONG></div>
</div>

<div id="Edit5_outer" style="Z-INDEX: 11; LEFT: 10px; WIDTH: 461px; POSITION: absolute; TOP: 214px; HEIGHT: 282px">


<?
if ($browser == " MS Internet Explorer"){
?>

	<!-- Gets replaced with TinyMCE, remember HTML in a textarea should be encoded -->
	<textarea id="elm1" name="elm1" rows="17" cols="80" style="width: 50">
		Digite a descrição do produto
	</textarea>


<?
}else{
?>	

	<!-- Gets replaced with TinyMCE, remember HTML in a textarea should be encoded -->
	<textarea id="elm1" name="elm1" rows="15" cols="80" style="width: 95%">
		Digite a descrição do produto
	</textarea>
	
	
<?	
}
?>




</div>
<div id="Label7_outer" style="Z-INDEX: 12; LEFT: 16px; WIDTH: 160px; POSITION: absolute; TOP: 504px; HEIGHT: 16px">
<div id="Label7" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:16px;width:160px;"   >Valor a Combinar?.:</div>
</div>
<div id="Edit6_outer" style="Z-INDEX: 13; LEFT: 176px; WIDTH: 69px; POSITION: absolute; TOP: 502px; HEIGHT: 21px">
<select type="text" id="Edit6" name="Edit6" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:69px;"    tabindex="5"    />

	<option value="<?=$Edit6;?>"> <?=$Edit6;?> </option>
            <option value="SIM"> SIM   </option>
            <option value="NÃO"> NÃO   </option>

</select>

</div>
<div id="Label8_outer" style="Z-INDEX: 14; LEFT: 16px; WIDTH: 160px; POSITION: absolute; TOP: 528px; HEIGHT: 16px">
<div id="Label8" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:16px;width:160px;"   >Valor do Produto.:</div>
</div>
<div id="Edit7_outer" style="Z-INDEX: 15; LEFT: 176px; WIDTH: 61px; POSITION: absolute; TOP: 526px; HEIGHT: 21px">
<select type="text" id="Edit7" name="Edit7" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:61px;"    tabindex="6"    />

	<option value="<?=$Edit7;?>"> <?=$Edit7;?> </option>
            <option value="R$"> R$   </option>
            <option value="$"> $   </option>

</select>

</div>
<div id="Edit8_outer" style="Z-INDEX: 16; LEFT: 240px; WIDTH: 85px; POSITION: absolute; TOP: 526px; HEIGHT: 21px">
<input type="text" id="Edit8" name="Edit8" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:85px;"    tabindex="7"    />
</div>

<?
if ($faz == 1){
?>

<div id="Label9_outer" style="Z-INDEX: 17; LEFT: 325px; WIDTH: 16px; POSITION: absolute; TOP: 523px; HEIGHT: 32px">
<div id="Label9" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:32px;width:16px;"   ><STRONG>.</STRONG></div>
</div>
	
<div id="Edit9_outer" style="Z-INDEX: 18; LEFT: 336px; WIDTH: 37px; POSITION: absolute; TOP: 526px; HEIGHT: 21px">
<input type="text" id="Edit9" name="Edit9" value="00" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:37px;"    tabindex="8"    />
</div>
<?
}
?>

<div id="Label10_outer" style="Z-INDEX: 19; LEFT: 330px; WIDTH: 103px; POSITION: absolute; TOP: 530px; HEIGHT: 16px">
<div id="Label10" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:16px;width:103px;"   ><FONT color=#ff0000>Ex.: 400.50</FONT></div>
</div>
<div id="Label11_outer" style="Z-INDEX: 20; LEFT: 16px; WIDTH: 160px; POSITION: absolute; TOP: 552px; HEIGHT: 16px">
<div id="Label11" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:16px;width:160px;"   >Quantidade.:</div>
</div>
<div id="Edit10_outer" style="Z-INDEX: 21; LEFT: 176px; WIDTH: 53px; POSITION: absolute; TOP: 550px; HEIGHT: 21px">
<input type="text" id="Edit10" name="Edit10" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:53px;"    tabindex="9"    />
</div>
<div id="Label12_outer" style="Z-INDEX: 22; LEFT: 16px; WIDTH: 160px; POSITION: absolute; TOP: 577px; HEIGHT: 16px">
<div id="Label12" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:16px;width:160px;"   >Detalhes da Entrega.:</div>
</div>
<div id="Edit11_outer" style="Z-INDEX: 23; LEFT: 176px; WIDTH: 149px; POSITION: absolute; TOP: 574px; HEIGHT: 21px">
<select type="text" id="Edit11" name="Edit11" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:149px;"    tabindex="10"    />

	<option value="<?=$Edit11;?>"> <?=$Edit11;?> </option>
            <option value="Correios"> Correios   </option>
            <option value="Transportadora"> Transportadora   </option>
            <option value="A Combinar"> A Combinar   </option>
            <option value="Outros"> Outros   </option>

</select>

</div>
<div id="Label13_outer" style="Z-INDEX: 24; LEFT: 16px; WIDTH: 160px; POSITION: absolute; TOP: 601px; HEIGHT: 16px">
<div id="Label13" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:16px;width:160px;"   >Forma de Pagamento.:</div>
</div>
<div id="Edit12_outer" style="Z-INDEX: 25; LEFT: 176px; WIDTH: 189px; POSITION: absolute; TOP: 598px; HEIGHT: 21px">
<select type="text" id="Edit12" name="Edit12" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:189px;"    tabindex="11"    />


	<option value="<?=$Edit12;?>"> <?=$Edit12;?> </option>
            <option value="A Combinar"> A Combinar   </option>
            <option value="Dinheiro"> Dinheiro   </option>
            <option value="Cartão de Credito"> Cartão de Credito   </option>
            <option value="Cheque"> Cheque   </option>
            <option value="Depósito Bancario"> Depósito Bancario   </option>
            <option value="Sedex a cobrar"> Sedex a cobrar   </option>
            <option value="Pagamento Seguro (Pagseguro)"> Pagamento Seguro (Pagseguro)   </option>

</select>

</div>
<div id="Label14_outer" style="Z-INDEX: 26; LEFT: 16px; WIDTH: 160px; POSITION: absolute; TOP: 627px; HEIGHT: 16px">
<div id="Label14" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:16px;width:160px;"   >Colocar em Destaque.:</div>
</div>
<div id="Edit13_outer" style="Z-INDEX: 27; LEFT: 176px; WIDTH: 61px; POSITION: absolute; TOP: 622px; HEIGHT: 21px">
<select type="text" id="Edit13" name="Edit13" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:61px;"    tabindex="12"    />

	<option value="<?=$Edit13;?>"> <?=$Edit13;?> </option>
            <option value="SIM"> SIM   </option>
            <option value="NÃO"> NÃO   </option>

</select>

</div>
<div id="Label15_outer" style="Z-INDEX: 28; LEFT: 16px; WIDTH: 160px; POSITION: absolute; TOP: 651px; HEIGHT: 16px">
<div id="Label15" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:16px;width:160px;"   >Produto Encontra-se em.:</div>
</div>
<div id="Edit14_outer" style="Z-INDEX: 29; LEFT: 176px; WIDTH: 176px; POSITION: absolute; TOP: 646px; HEIGHT: 21px">
<input type="text" id="Edit14" name="Edit14" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:176px;"    tabindex="13"    />
</div>


<div id="Label16_outer" style="Z-INDEX: 28; LEFT: 16px; WIDTH: 160px; POSITION: absolute; TOP: 675px; HEIGHT: 16px">
<div id="Label16" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:16px;width:160px;"   >Tipo de Negociacao.:</div>
</div>
<div id="Edit15_outer" style="Z-INDEX: 29; LEFT: 176px; WIDTH: 176px; POSITION: absolute; TOP: 671px; HEIGHT: 21px">
<select type="text" id="Edit16" name="Edit16" value="" style=" font-family: Verdana; font-size: 11px;  background-color: #FFFFFF;height:20px;width:176px;"    tabindex="14"    />

	<option value="Selecione"> Selecione </option>
            <option value="Venda"> Venda   </option>
            <option value="Troca"> Troca   </option>
            <option value="Venda ou Troca"> Venda ou Troca </option>

</select>

</div>



<div id="Label16_outer" style="Z-INDEX: 30; LEFT: 264px; WIDTH: 200px; POSITION: absolute; TOP: 168px; HEIGHT: 24px">
<div id="Label16" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:24px;width:200px;"   ><FONT color=#ff0000>Informar em Kilo Ex.: 00.35 (350 Gramas)</FONT></div>
</div>


<div id="Button1_outer" style="Z-INDEX: 31; LEFT: 153px; WIDTH: 160px; POSITION: absolute; TOP: 704px; HEIGHT: 24px">
<input type="submit" id="Button1" name="Button1" value="Cadastrar Produto"  style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:24px;width:160px;"   tabindex="14"    />
</div>

</td></tr></table>
</form>

<form method="post"  action="javascript:history.go(-1);">
<div id="Button2_outer" style="Z-INDEX: 32; LEFT: 347px; WIDTH: 160px; POSITION: absolute; TOP: 704px; HEIGHT: 24px">
<input type="submit" id="Button2" name="Button2" value="Não Cadastrar"  style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:24px;width:160px;"   tabindex="15"    />
</div>
</form>

</body>
</html>
<?
}else{
	
	require("inew_undher_files.php");	

}
?>