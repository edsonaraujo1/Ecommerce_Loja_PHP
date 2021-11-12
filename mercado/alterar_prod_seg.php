<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Alterar Produto
 Criado em Data.....: 07/12/2007
 Ultima Atualização : 13/07/2009

 DEUS SEJA LOUVADO
 -----------------------------------------
*/

include('aguarde.php');

include('titulo.php');

// Abre Conexão com o MySql
include("../conexao.php");
// Chama o Banco de Dados

// Resgata a Sessao
session_start();
$ser_name3_c = $_SESSION["log_name_c"];

if ($ser_name3_c == "VISITANTE"){
	
	include("../informe.php");
	exit;
}
if (empty($ser_name3_c)){
	
	include("../informe.php");
	exit;
}

$link = @mysql_connect($host,$user,$pass)

    or die( include("../server.php"));

@mysql_select_db($db);


$consulta3  = "SELECT * FROM produto2 WHERE codigo = '$id_prod'";
					
$resultado3 = @mysql_query($consulta3);
					
				
$row3 = @mysql_fetch_array($resultado3);
					
$id            = @$row3["codigo"];
$id_prod       = @$row3["codigo"];
$nome          = @$row3["nome"];
$descricao     = @$row3["descricao"];
$preco1        = @$row3["valor1"];
$preco2        = @$row3["valor2"];
$foto          = @$row3["fot_peq"];
$foto1         = @$row3["fot_1"];
$foto2         = @$row3["fot_2"];
$foto3         = @$row3["fot_3"];
$quantidade    = @$row3["quantidade"];
$visitas       = @$row3["visita"];
$estado        = @$row3["local_produto"];
$data          = @$row3["data"];
$peso_1        = @$row3["peso"];
$tipo          = @$row3["tipo"];
$categoria     = @$row3["categoria"];
$combinar      = @$row3["combinar"];
$entrega       = @$row3["entrega"];
$pagamento     = @$row3["pagamento"];
$destaque      = @$row3["destaque"];
$local_produto = @$row3["local_produto"];
$negociacao    = @$row3["negociacao"];


//echo "combinar ".$negociacao."<br>";

if (empty($foto1)){
	
	$foto1 = "fotos/sem_foto.jpg";
	
}
if (empty($foto2)){
	
	$foto2 = "fotos/sem_foto.jpg";
	
}
if (empty($foto3)){
	
	$foto3 = "fotos/sem_foto.jpg";
	
}

$nome_user_1 = trim(strtoupper(@$row3["nome_user"]));

$query_Recordset2 = "SELECT cod_categ, descricao FROM categoria_prod WHERE cod_categ = $categoria";
$Recordset2 = @mysql_query($query_Recordset2, $link); // or die(mysql_error());
$row_Recordset2 = @mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = @mysql_num_rows($Recordset2);




$query_Recordset1 = "SELECT cod_categ, descricao FROM categoria_prod";
$Recordset1 = @mysql_query($query_Recordset1, $link); // or die(mysql_error());
$row_Recordset1 = @mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = @mysql_num_rows($Recordset1);


include("../funcoes2.php");

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

<script language="JavaScript" type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>

</head>

<body style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; " bgcolor="#FFFFFF">

<table width="100%" height="52" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="100%" background="../graphics/forum_baner.png"><span class="style19">&nbsp;&nbsp;Meus Produtos</span></td>
            </tr>
          </table>


<form style="margin-bottom: 0" id="form1" name="form1" method="post"  action="alterar.php?cod_prod=<?=$id_prod;?>">
<table  width="495"   style="height:752px"  border="0" cellpadding="0" cellspacing="0"  bgcolor="#FFFFFF"  ><tr><td valign="top">


<div id="Image2_outer" style="Z-INDEX: 35; LEFT: 404px; WIDTH: 64px; POSITION: absolute; TOP: 71px; HEIGHT: 73px">
<div id="Image2_container" style=" width: 64;  height: 73; " ><a href="javascript:;" onClick="MM_openBrWindow('upload_foto.php?cod_prod=<?=$id_prod;?>&num_foto=0','','width=510,height=225')"> <img id="Image2" src="../<?=$foto;?>"  width="64"  height="76"  border="0"       /></a></div>
</div>
<div id="Image3_outer" style="Z-INDEX: 36; LEFT: 473px; WIDTH: 64px; POSITION: absolute; TOP: 71px; HEIGHT: 73px">
<div id="Image3_container" style=" width: 64;  height: 73; " ><a href="javascript:;" onClick="MM_openBrWindow('upload_foto.php?cod_prod=<?=$id_prod;?>&num_foto=1','','width=510,height=225')"> <img id="Image3" src="../<?=$foto1;?>"  width="64"  height="76"  border="0"       /></a></div>
</div>
<div id="Image4_outer" style="Z-INDEX: 37; LEFT: 541px; WIDTH: 64px; POSITION: absolute; TOP: 71px; HEIGHT: 73px">
<div id="Image4_container" style=" width: 64;  height: 73; " ><a href="javascript:;" onClick="MM_openBrWindow('upload_foto.php?cod_prod=<?=$id_prod;?>&num_foto=2','','width=510,height=225')"> <img id="Image4" src="../<?=$foto2;?>"  width="64"  height="76"  border="0"       /></a></div>
</div>
<div id="Image5_outer" style="Z-INDEX: 38; LEFT: 609px; WIDTH: 64px; POSITION: absolute; TOP: 71px; HEIGHT: 73px">
<div id="Image5_container" style=" width: 64;  height: 73; " ><a href="javascript:;" onClick="MM_openBrWindow('upload_foto.php?cod_prod=<?=$id_prod;?>&num_foto=3','','width=510,height=225')"> <img id="Image5" src="../<?=$foto3;?>"  width="64"  height="76"  border="0"       /></a></div>
</div>

<div id="Label1_outer" style="Z-INDEX: 1; LEFT: 16px; WIDTH: 144px; POSITION: absolute; TOP: 64px; HEIGHT: 16px">
<div id="Label1" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:16px;width:144px;"   >Categoria do Produto.:</div>
</div>
<div id="Edit1_outer" style="Z-INDEX: 2; LEFT: 163px; WIDTH: 200px; POSITION: absolute; TOP: 62px; HEIGHT: 21px">
<select type="text" id="Edit1" name="Edit1" value="<?=$categoria;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:200px;"    tabindex="0"    >

      <option value="<?php echo $row_Recordset2['cod_categ']?>"><?php echo $row_Recordset2['descricao']?></option>

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
<input type="text" id="Edit2" name="Edit2" value="<?=$nome;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:200px;"    tabindex="1"    />
</div>
<div id="Label4_outer" style="Z-INDEX: 6; LEFT: 16px; WIDTH: 144px; POSITION: absolute; TOP: 144px; HEIGHT: 16px">
<div id="Label4" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:16px;width:144px;"   >Tipo&nbsp;de Produto.:</div>
</div>
<div id="Edit3_outer" style="Z-INDEX: 7; LEFT: 163px; WIDTH: 93px; POSITION: absolute; TOP: 142px; HEIGHT: 21px">
<select type="text" id="Edit3" name="Edit3" value="<?=$tipo;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:93px;"    tabindex="2"    >

	<option value="<?=$tipo;?>"> <?=$tipo;?> </option>
            <option value="USADO"> USADO   </option>
            <option value="NOVO"> NOVO   </option>

</select>

</div>
<div id="Label5_outer" style="Z-INDEX: 8; LEFT: 16px; WIDTH: 144px; POSITION: absolute; TOP: 168px; HEIGHT: 16px">
<div id="Label5" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:16px;width:144px;"   >Peso Aproximado.:</div>
</div>
<div id="Edit4_outer" style="Z-INDEX: 9; LEFT: 163px; WIDTH: 93px; POSITION: absolute; TOP: 166px; HEIGHT: 21px">
<input type="text" id="Edit4" name="Edit4" value="<?=$peso_1;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:93px;"    tabindex="3"    />
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
		<?=$descricao;?>
	</textarea>


<?
}else{
?>	

	<!-- Gets replaced with TinyMCE, remember HTML in a textarea should be encoded -->
	<textarea id="elm1" name="elm1" rows="15" cols="80" style="width: 50">
		<?=$descricao;?>
	</textarea>
	
	
<?	
}
?>




</div>
<div id="Label7_outer" style="Z-INDEX: 12; LEFT: 16px; WIDTH: 160px; POSITION: absolute; TOP: 504px; HEIGHT: 16px">
<div id="Label7" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:16px;width:160px;"   >Valor a Combinar?.:</div>
</div>
<div id="Edit6_outer" style="Z-INDEX: 13; LEFT: 176px; WIDTH: 69px; POSITION: absolute; TOP: 502px; HEIGHT: 21px">
<select type="text" id="Edit6" name="Edit6" value="<?=$combinar;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:69px;"    tabindex="5"    />

	<option value="<?=$combinar;?>"> <?=$combinar;?> </option>
            <option value="SIM"> SIM   </option>
            <option value="NÃO"> NÃO   </option>

</select>

</div>
<div id="Label8_outer" style="Z-INDEX: 14; LEFT: 16px; WIDTH: 160px; POSITION: absolute; TOP: 528px; HEIGHT: 16px">
<div id="Label8" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:16px;width:160px;"   >Valor do Produto.:</div>
</div>
<div id="Edit7_outer" style="Z-INDEX: 15; LEFT: 176px; WIDTH: 61px; POSITION: absolute; TOP: 526px; HEIGHT: 21px">
<select type="text" id="Edit7" name="Edit7" value="<?=$preco1;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:61px;"    tabindex="6"    >

	<option value="<?=$preco1;?>"> <?=$preco1;?> </option>
            <option value="R$"> R$   </option>
            <option value="$"> $   </option>

</select>

</div>
<div id="Edit8_outer" style="Z-INDEX: 16; LEFT: 240px; WIDTH: 85px; POSITION: absolute; TOP: 526px; HEIGHT: 21px">
<input type="text" id="Edit8" name="Edit8" value="<?=$preco2;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:85px;"    tabindex="7"    />
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
<input type="text" id="Edit10" name="Edit10" value="<?=$quantidade;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:53px;"    tabindex="9"    />
</div>
<div id="Label12_outer" style="Z-INDEX: 22; LEFT: 16px; WIDTH: 160px; POSITION: absolute; TOP: 577px; HEIGHT: 16px">
<div id="Label12" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:16px;width:160px;"   >Detalhes da Entrega.:</div>
</div>
<div id="Edit11_outer" style="Z-INDEX: 23; LEFT: 176px; WIDTH: 149px; POSITION: absolute; TOP: 574px; HEIGHT: 21px">
<select type="text" id="Edit11" name="Edit11" value="<?=$entrega;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:149px;"    tabindex="10"    />

	<option value="<?=$entrega;?>"> <?=$entrega;?> </option>
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
<select type="text" id="Edit12" name="Edit12" value="<?=$pagamento;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:189px;"    tabindex="11"    />


	<option value="<?=$pagamento;?>"> <?=$pagamento;?> </option>
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
<select type="text" id="Edit13" name="Edit13" value="<?=$destaque;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:61px;"    tabindex="12"    />

	<option value="<?=$destaque;?>"> <?=$destaque;?> </option>
            <option value="SIM"> SIM   </option>
            <option value="NÃO"> NÃO   </option>

</select>

</div>
<div id="Label15_outer" style="Z-INDEX: 28; LEFT: 16px; WIDTH: 160px; POSITION: absolute; TOP: 651px; HEIGHT: 16px">
<div id="Label15" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:16px;width:160px;"   >Produto Encontra-se em.:</div>
</div>
<div id="Edit14_outer" style="Z-INDEX: 29; LEFT: 176px; WIDTH: 176px; POSITION: absolute; TOP: 646px; HEIGHT: 21px">
<input type="text" id="Edit14" name="Edit14" value="<?=$local_produto;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:176px;"    tabindex="13"    />
</div>


<div id="Label16_outer" style="Z-INDEX: 28; LEFT: 16px; WIDTH: 160px; POSITION: absolute; TOP: 675px; HEIGHT: 16px">
<div id="Label16" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:16px;width:160px;"   >Tipo de Negociacao.:</div>
</div>
<div id="Edit15_outer" style="Z-INDEX: 29; LEFT: 176px; WIDTH: 176px; POSITION: absolute; TOP: 671px; HEIGHT: 21px">
<select type="text" id="Edit16" name="Edit16" value="<?=$negociacao;?>" style=" font-family: Verdana; font-size: 11px;  background-color: #FFFFFF;height:20px;width:176px;"    tabindex="14"    />

	<option value="<?=$negociacao;?>"> <?=$negociacao;?> </option>
            <option value="Venda"> Venda   </option>
            <option value="Troca"> Troca   </option>
            <option value="Venda ou Troca"> Venda ou Troca   </option>

</select>

</div>



<div id="Label16_outer" style="Z-INDEX: 30; LEFT: 264px; WIDTH: 200px; POSITION: absolute; TOP: 168px; HEIGHT: 24px">
<div id="Label16" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:24px;width:200px;"   ><FONT color=#ff0000>Informar em Kilo Ex.: 00.35 (350 Gramas)</FONT></div>
</div>


<div id="Button1_outer" style="Z-INDEX: 31; LEFT: 153px; WIDTH: 160px; POSITION: absolute; TOP: 704px; HEIGHT: 24px">
<input type="submit" id="Button1" name="Button1" value="Salvar Alteração"  style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:24px;width:160px;"   tabindex="14"    />
</div>

</td></tr></table>
</form>

<form method="post"  action="../meus_prod/layout.php?entra_no_web1=at2">
<div id="Button2_outer" style="Z-INDEX: 32; LEFT: 347px; WIDTH: 160px; POSITION: absolute; TOP: 704px; HEIGHT: 24px">
<input type="submit" id="Button2" name="Button2" value="Descartar"  style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:24px;width:160px;"   tabindex="15"    />
</div>
</form>

</body>
</html>
<?
include('rodape.php');
?>