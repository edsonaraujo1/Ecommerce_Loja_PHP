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

include('aguarde.php');

include('titulo.php');

include_once('../config.php');

// Abre Conexão com o MySql
include("../conexao.php");


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


$query_Recordset2 = "SELECT cod_categ, descricao FROM categoria_prod1";
$Recordset2 = @mysql_query($query_Recordset2, $link); // or die(mysql_error());
$row_Recordset2 = @mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = @mysql_num_rows($Recordset2);


$query_Recordset1 = "SELECT cod_categ, descricao, sub_codigo FROM categoria_prod  ORDER BY cod_categ ASC";
$Recordset1 = @mysql_query($query_Recordset1, $link); // or die(mysql_error());
$row_Recordset1 = @mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = @mysql_num_rows($Recordset1);

	
	$foto = "fotos/sem_foto.jpg";
	
	$foto1 = "fotos/sem_foto.jpg";
	
	$foto2 = "fotos/sem_foto.jpg";
	
	$foto3 = "fotos/sem_foto.jpg";
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$Titulo;?></title>
<link rel="shortcut icon" href="../graphics/favicon.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

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

<script language="JavaScript" type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>


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


<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"><b><font color="#FF6600" face="Arial">Cadastro de Produto <font size="2">(portal da troca)</font> </font></b> </td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td width="1%"><img src="../graphics/px1.gif" width="10" height="10"></td>
    <td width="98%" align="center"><table width="419" border="0" align="center">
      <tr>
        <td width="100" height="87"><div align="center"><!--<a href="javascript:;" onClick="MM_openBrWindow('upload_foto.php?cod_prod=<?=$id_prod;?>&num_foto=0','','width=510,height=225')">--><img src="../<?=$foto;?>" width="85" height="85" border="0"></div></td>
        <td width="99"><div align="center"><!--<a href="javascript:;" onClick="MM_openBrWindow('upload_foto.php?cod_prod=<?=$id_prod;?>&num_foto=1','','width=510,height=225')">--><img src="../<?=$foto1;?>" width="85" height="85" border="0"></div></td>
        <td width="99"><div align="center"><!--<a href="javascript:;" onClick="MM_openBrWindow('upload_foto.php?cod_prod=<?=$id_prod;?>&num_foto=2','','width=510,height=225')">--><img src="../<?=$foto2;?>" width="85" height="85" border="0"></div></td>
        <td width="103"><div align="center"><!--<a href="javascript:;" onClick="MM_openBrWindow('upload_foto.php?cod_prod=<?=$id_prod;?>&num_foto=3','','width=510,height=225')">--><img src="../<?=$foto3;?>" width="85" height="85"  border="0"></div></td>
        </tr>
    </table>
      <table width="330" border="1">
        <tr>
          <td width="270" bordercolor="#000000" bgcolor="#FF9966"><font size="-2"><b><font color="#000000" face="Verdana">Para incluir as fotos clique nas imagens acima</font></b></font></td>
        </tr>
      </table>     
	   <form id="Form1" name="Form1" method="post"  action="incluir.php" onsubmit="return validaCampo(); return false;">
      <table border="0">
        <tr>
          <td align="left" bgcolor="#DDDCD9"><div align="left">  
		  
<table width="100%" border="0" cellpadding="0" cellspacing="1">
                <tr>
                  <td width="193" height="31" align="left"><b><font size="-1" face="Verdana">Categoria do Produtos.: </font></b></td>
                  <td width="393" align="left">
				  <select type="text" id="Edit1" name="Edit1" value="Selecione" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:200px;"    tabindex="0"    >

				  <option value="Selecione">Selecione</option>
					
					<?
					Do {  
					?>
					      <option value="<?php echo $row_Recordset2['cod_categ']?>"><?php echo $row_Recordset2['descricao']?></option>
					<?
					}
					while ($row_Recordset2 = mysql_fetch_assoc($Recordset2));
					      $rows2= mysql_num_rows($Recordset2);
					      if($rows2 > 0) {
					         mysql_data_seek($Recordset2, 0);
						     $row_Recordset2 = mysql_fetch_assoc($Recordset2);
					      }
					?>
					
				  </select>
				  
				  </td>
                </tr>
                <tr>
                  <td height="31" align="left"><b><font size="-1" face="Verdana">Tipo do Produto.: </font></b></td>
                  <td align="left">
				  
				  <select type="text" id="Edit2a" name="Edit2a" value="" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:200px;"    tabindex="0"    >

				  <option value="<?php echo $row_Recordset1['cod_categ']?>"><?php echo $row_Recordset1['descricao']?></option>
					
					<?
					Do {  
					?>
					      <option value="<?php echo $row_Recordset1['cod_categ']?>"><?php echo $row_Recordset1['descricao']?></option>
					<?
					}
					while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));
					      $rows1 = mysql_num_rows($Recordset1);
					      if($rows1 > 0) {
					         mysql_data_seek($Recordset1, 0);
						     $row_Recordset1 = mysql_fetch_assoc($Recordset1);
					      }
					?>
					
				  </select>
				  
				  </td>
                </tr>
              </table>		  
		  
              <table width="593" border="0">
                <tr>
                  <td width="583"><div align="center"><font size="-2"><b><font face="Verdana">Anucie seu produto na categoria correta e aranta mais vendas <br>
        A venda de Produtos pirata &eacute; crime.</font> </b></font></div></td>
                </tr>
              </table>
              <table width="100%" border="0">
                <tr>
                  <td width="185" height="31" align="left"><b><font size="-1" face="Verdana">Titulo do Produto .: </font></b></td>
                  <td width="384" align="left">
				  
<input type="text" id="Edit2" name="Edit2" value="<?=$nome;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:200px;"    tabindex="1"    />
<input type="hidden" maxlength='30' size='30' name='id_01' value="<?=$id_prod;?>">
				  
				  </td>
                </tr>
                <tr>
                  <td height="31" align="left"><b><font size="-1" face="Verdana">Condi&ccedil;&atilde;o do Produto .:</font></b></td>
                  <td align="left">
				  
				  <select type="text" id="Edit3" name="Edit3" value="<?=$tipo;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:93px;"    tabindex="2"    >

	<option value="<?=$tipo;?>"> <?=$tipo;?> </option>
            <option value="USADO"> USADO   </option>
            <option value="NOVO"> NOVO   </option>

</select>

				  </td>
                </tr>
                <tr>
                  <td height="31" align="left"><b><font size="-1" face="Verdana">Peso do Produto .:</font></b></td>
                  <td align="left"><input type="text" id="Edit4" name="Edit4" value="<?=$peso_1;?>"/>
                      <img src="../graphics/px1.gif" width="8" height="8"> <font color="#FF0000" size="2">Informar em Kilo Ex.: 00.35 (350 Gramas) </font></td>
                </tr>
              </table>
          </div></td>
        </tr>
      </table>            <table width="579" border="0" cellspacing="3">
        <tr>
          <td width="474"> <font color="#FF9933" size="2"><b>DESCRICAO DO PRODUTO</b></font></td>
        </tr>
        <tr>
          <td>
		  
		  
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
		  
	  </td>
        </tr>
      </table>      
      <br>
      <table width="593" border="0">
        <tr>
          <td bgcolor="#DDDCD9"><table width="593" border="0">
            <tr>
              <td width="205" height="31" align="left"><div align="left"><b><font size="-1" face="Verdana"> Valor a Combinar?.: </font></b></div></td>
              <td width="372" align="left"><div align="left">
              
<select type="text" id="Edit6" name="Edit6" value="<?=$combinar;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:69px;"    tabindex="5"    />

	<option value="<?=$combinar;?>"> <?=$combinar;?> </option>
            <option value="SIM"> SIM   </option>
            <option value="NÃO"> NÃO   </option>

</select>
              
              
              </div></td>
            </tr>
            <tr>
              <td height="31" align="left"><div align="left"><b><font size="-1" face="Verdana"> Valor do Produto.: </font></b></div></td>
              <td align="left"><div align="left">
              
<select type="text" id="Edit7" name="Edit7" value="<?=$preco1;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:61px;"    tabindex="6"    >

	<option value="<?=$preco1;?>"> <?=$preco1;?> </option>
            <option value="R$"> R$   </option>
            <option value="$"> $   </option>

</select>
                  <img src="../graphics/px1.gif" width="3" height="8">
                  
<input type="text" id="Edit8" name="Edit8" value="<?=$preco2;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:85px;"    tabindex="7"    />
                  
                  <img src="../graphics/px1.gif" width="8" height="8"> <font color="#FF0000" size="3">Ex.: 400.50</font> </div></td>
            </tr>
            <tr>
              <td height="31" align="left"><div align="left"><b><font size="-1" face="Verdana"> Quantidade.: </font></b></div></td>
              <td align="left"><div align="left">
              
<input type="text" id="Edit10" name="Edit10" value="<?=$quantidade;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:53px;"    tabindex="9"    />
              </div></td>
            </tr>
            <tr>
              <td height="31" align="left"><div align="left"><b><font size="-1" face="Verdana"> Detalhes da Entrega.: </font></b></div></td>
              <td align="left"><div align="left">
              
<select type="text" id="Edit11" name="Edit11" value="<?=$entrega;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:149px;"    tabindex="10"    />

	<option value="<?=$entrega;?>"> <?=$entrega;?> </option>
            <option value="Correios"> Correios   </option>
            <option value="Transportadora"> Transportadora   </option>
            <option value="A Combinar"> A Combinar   </option>
            <option value="Outros"> Outros   </option>

</select>
              
              </div></td>
            </tr>
            <tr>
              <td height="31" align="left"><div align="left"><b><font size="-1" face="Verdana"> Forma de Pagamento.: </font></b></div></td>
              <td align="left"><div align="left">
              
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

              </div></td>
            </tr>
            <tr>
              <td height="31" align="left"><div align="left"><b><font size="-1" face="Verdana"> Colocar em Destaque.: </font></b></div></td>
              <td align="left"><div align="left">
              
<select type="text" id="Edit13" name="Edit13" value="<?=$destaque;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:61px;"    tabindex="12"    />

	<option value="<?=$destaque;?>"> <?=$destaque;?> </option>
            <option value="SIM"> SIM   </option>
            <option value="NÃO"> NÃO   </option>

</select>
              
              </div></td>
            </tr>
            <tr>
              <td height="31" align="left"><div align="left"><b><font size="-1" face="Verdana"> Produto Encontra-se em.: </font></b></div></td>
              <td align="left"><div align="left">
              
<input type="text" id="Edit14" name="Edit14" value="<?=$local_produto;?>" style=" font-family: Verdana; font-size: 10px;  background-color: #FFFFFF;height:20px;width:176px;"    tabindex="13"    />
              
              </div></td>
            </tr>
            <tr>
              <td height="31" align="left"><div align="left"><b><font size="-1" face="Verdana"> Tipo de Negociacao.: </font></b></div></td>
              <td align="left"><div align="left">
              
<select type="text" id="Edit16" name="Edit16" value="<?=$negociacao;?>" style=" font-family: Verdana; font-size: 11px;  background-color: #FFFFFF;height:20px;width:176px;"    tabindex="14"    />

	<option value="<?=$negociacao;?>"> <?=$negociacao;?> </option>
            <option value="Venda"> Venda   </option>
            <option value="Troca"> Troca   </option>
            <option value="Venda ou Troca"> Venda ou Troca   </option>

</select>
              
              </div></td>
            </tr>
            <tr>
              <td align="left"><div align="left"></div></td>
              <td align="left"><div align="left"></div></td>
            </tr>
          </table></td>
        </tr>
      </table>      
    <br>      <table width="236" border="0">
      <tr>
        <td width="100"><input id="Button1" name="Button1" type=image src="../graphics/salvar1.png" width="100" height="32"></td>
        	</form>

        <td width="67">&nbsp;</td>

        <form method="post"  action="../meus_prod/meus_prod.php">

        <td width="11"><input id="Button2" name="Button2" type=image src="../graphics/descarta1.png" width="100" height="32"></td>
       </form> 
        
      </tr>
    </table>    
	<br>    <br>      <br></td>
    <td width="1%"><div align="center"><img src="../graphics/px1.gif" width="8" height="10"></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?
include('rodape.php');
?>