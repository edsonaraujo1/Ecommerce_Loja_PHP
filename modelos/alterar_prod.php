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

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
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

</style>

<script language="JavaScript" type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>

</head>

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
        <td width="100" height="87"><div align="center"><a href="javascript:;" onClick="MM_openBrWindow('upload_foto.php?cod_prod=<?=$id_prod;?>&num_foto=0','','width=510,height=225')"><img src="../fotos/1b5d28b52339c50c2150images.jpg" width="85" height="85" border="0"></a></div></td>
        <td width="99"><div align="center"><a href="javascript:;" onClick="MM_openBrWindow('upload_foto.php?cod_prod=<?=$id_prod;?>&num_foto=1','','width=510,height=225')"><img src="../fotos/2e43d82db1418737_640.jpg" width="85" height="85" border="0"></a></div></td>
        <td width="99"><div align="center"><a href="javascript:;" onClick="MM_openBrWindow('upload_foto.php?cod_prod=<?=$id_prod;?>&num_foto=2','','width=510,height=225')"><img src="../fotos/8e31da1c36edd7d1bc53monitor.jpg" width="85" height="85" border="0"></a></div></td>
        <td width="103"><div align="center"><a href="javascript:;" onClick="MM_openBrWindow('upload_foto.php?cod_prod=<?=$id_prod;?>&num_foto=3','','width=510,height=225')"><img src="../fotos/7f151d8809img_telefone.GIF" width="85" height="85"  border="0"></a></div></td>
        </tr>
    </table>
      <table width="330" border="1">
        <tr>
          <td width="270" bordercolor="#000000" bgcolor="#FF9966"><font size="-2"><b><font color="#000000" face="Verdana">Para incluir as fotos clique nas imagens acima</font></b></font></td>
        </tr>
      </table>     
	   <form id="form1" name="form1" method="post"  action="alterar.php?cod_prod=<?=$id_prod;?>">
      <table border="0">
        <tr>
          <td align="left" bgcolor="#DDDCD9"><div align="left">              <table width="100%" border="0" cellpadding="0" cellspacing="1">
                <tr>
                  <td width="193" height="31" align="left"><b><font size="-1" face="Verdana">Categoria do Produtos.: </font></b></td>
                  <td width="393" align="left">
				  
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
                  <td width="384" align="left"><input type="text" name="textfield2"></td>
                </tr>
                <tr>
                  <td height="31" align="left"><b><font size="-1" face="Verdana">Condi&ccedil;&atilde;o do Produto .:</font></b></td>
                  <td align="left"><input type="text" name="textfield23"></td>
                </tr>
                <tr>
                  <td height="31" align="left"><b><font size="-1" face="Verdana">Peso do Produto .:</font></b></td>
                  <td align="left"><input type="text" name="textfield24">
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
		  
		  <textarea id="elm1" name="elm1" rows="17" cols="80" style="width: 50">
		  <?=$descricao;?>
	      </textarea>		  </td>
        </tr>
      </table>      
      <br>
      <table width="593" border="0">
        <tr>
          <td bgcolor="#DDDCD9"><table width="593" border="0">
            <tr>
              <td width="205" height="31" align="left"><div align="left"><b><font size="-1" face="Verdana"> Valor a Combinar?.: </font></b></div></td>
              <td width="372" align="left"><div align="left">
                  <input type="text" name="textfield242">
              </div></td>
            </tr>
            <tr>
              <td height="31" align="left"><div align="left"><b><font size="-1" face="Verdana"> Valor do Produto.: </font></b></div></td>
              <td align="left"><div align="left">
                  <input name="textfield243" type="text" size="7" width="50">
                  <img src="../graphics/px1.gif" width="3" height="8">
                  <input name="textfield2410" type="text" size="8" width="80">
                  <img src="../graphics/px1.gif" width="8" height="8"> <font color="#FF0000" size="3">Ex.: 400.50</font> </div></td>
            </tr>
            <tr>
              <td height="31" align="left"><div align="left"><b><font size="-1" face="Verdana"> Quantidade.: </font></b></div></td>
              <td align="left"><div align="left">
                  <input type="text" name="textfield244">
              </div></td>
            </tr>
            <tr>
              <td height="31" align="left"><div align="left"><b><font size="-1" face="Verdana"> Detalhes da Entrega.: </font></b></div></td>
              <td align="left"><div align="left">
                  <input type="text" name="textfield245">
              </div></td>
            </tr>
            <tr>
              <td height="31" align="left"><div align="left"><b><font size="-1" face="Verdana"> Forma de Pagamento.: </font></b></div></td>
              <td align="left"><div align="left">
                  <input type="text" name="textfield246">
              </div></td>
            </tr>
            <tr>
              <td height="31" align="left"><div align="left"><b><font size="-1" face="Verdana"> Colocar em Destaque.: </font></b></div></td>
              <td align="left"><div align="left">
                  <input type="text" name="textfield247">
              </div></td>
            </tr>
            <tr>
              <td height="31" align="left"><div align="left"><b><font size="-1" face="Verdana"> Produto Encontra-se em.: </font></b></div></td>
              <td align="left"><div align="left">
                  <input type="text" name="textfield248">
              </div></td>
            </tr>
            <tr>
              <td height="31" align="left"><div align="left"><b><font size="-1" face="Verdana"> Tipo de Negociacao.: </font></b></div></td>
              <td align="left"><div align="left">
                  <input type="text" name="textfield249">
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
        <td width="67">&nbsp;</td>
        <td width="11"><input id="Button2" name="Button2" type=image src="../graphics/descarta1.png" width="100" height="32"></td>
      </tr>
    </table>    
	</form>
	<br>    <br>      <br></td>
    <td width="1%"><div align="center"><img src="../graphics/px1.gif" width="8" height="10"></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center"><img src="../graphics/retorno.png" width="30" height="31"></div></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?
include('rodape.php');
?>