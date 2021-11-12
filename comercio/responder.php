<?
/*
 ----------------------------------------------------------
 Desenvolvido por...: Edson de Araujo
 Finalidade.........: Form Resposta Forum
 Criado em Data.....: 02/08/2009
 Ultima Atualização : 02/08/2009 

 DEUS SEJA LOUVADO
 ----------------------------------------------------------
*/

include('aguarde.php');

include('titulo.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$Titulo;?></title>
<link rel="shortcut icon" href="../graphics/favicon.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"><b><font color="#FF6600" face="Arial">Portal da Troca </font></b></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td width="1%">            <img src="../graphics/px1.gif" width="30" height="10"><br>    </td>
    <td width="92%" align="center" valign="top">
	<!-- Inicioda do Layout -->
<?
// Resgata a Sessao
session_start();
$ser_name3_c = strtolower($_SESSION["log_name_c"]);
$acesso_2 = $_SESSION['data_log_2'];

if (empty($ser_name3_c)){
	
	require("comercio.php");
	exit;
}


// Abre Conexão com o MySql
include("../conexao.php");

// Resgata a Sessao
@session_start();
$ser_name3_c    = $_SESSION["log_name_c"];
$acesso_2 = $_SESSION['data_log_2'];

$link = @mysql_connect($host,$user,$pass)

    or die( require("../login.php"));

@mysql_select_db($db);

$consulta  = "SELECT * FROM msg_question WHERE id = " .decode5t($id_msg). " ";
					
$resultado = @mysql_query($consulta);
			
$row = @mysql_fetch_array($resultado);

$id         = @$row["id"];
$id_prod    = @$row["cod_prod"];
$nome       = @$row["nome"];
$foto       = @$row["foto"];
$vendedor   = @$row["vendedor"];
$comprador  = strtolower(@$row["comprador"]);
$mensagem   = @$row["mensagem"];
$data       = @$row["data"];
$cod_prod   = @$row["cod_prod"];
$time       = @$row["time"];
$foto_pda   = @$row["foto"];
$respondido = @$row["respondido"];

if (empty($comprador)){
	
	$comprador = "VISITANTE";
	
}
// Procura e-mail do Comprador

$consulta2z  = "SELECT * FROM tt_ser_01 WHERE login = '$comprador'";
					
$resultado2z = @mysql_query($consulta2z);
					
$row2z = @mysql_fetch_array($resultado2z);
					
$mail_des_2z 	= @$row2z["e_mail"];
$nome_compra    = strtolower(trim(@$row2z["nome"]));

$consulta2  = "SELECT * FROM tt_ser_01 WHERE login = '$ser_name3_c'";
					
$resultado2 = @mysql_query($consulta2);
					
// Incrementa novo codigo
					
$row2 = @mysql_fetch_array($resultado2);
					
$codigo_2 	    = @$row2["codigo"];             
$nome_2 		= trim(@$row2["nome"])." ".trim(@$row2["sobrenome"]);      		
$mail_des_2 	= @$row2["e_mail"];
$login_2 		= @$row2["login"];
$foto_pda       = @$row2["foto_peq"];

if (!empty($foto_pda)){
	
	$foto_pda = "../cadastro/".$foto_pda;
	
}else{
	
	$foto_pda = "graphics/foto_padrao65.jpg";

}

function fmodAddOn($x,$y)
{
       $i = floor($x/$y);

       // r = x - i * y
       return $x - $i*$y;
}
?>
<link rel="stylesheet" href="forum.css" type="text/css">

<style type="text/css">
<!--
.style3 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<head>

<!-- TinyMCE -->
<script type="text/javascript" src="../jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "simple"
	});
</script>
<!-- /TinyMCE -->

</head>
<a name="form"></a>

<form action="save_resp.php" name="form" method="post">
<table width="100%" border=0 cellpadding=0  cellspacing=0>
  <!--DWLayoutTable-->
  <tbody>
    <tr bgcolor="#FFFFFF">
      <td class=campo>
        <table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="ffffff">
          <!--DWLayoutTable-->
          <tr>
            <td width="886" align="center" valign="top">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                <!--DWLayoutTable-->
                <tr>
                  <td width="886" height="19" valign="top" bgcolor="#FF9900">
                  <div align="center" class="style3"> Responder Pregunta sobre o Produto </div></td>
                </tr>
                <tr>
                  <td height="19" valign="top" bgcolor="#CCCCCC">
                    <div align="center"><strong>Produto:</strong>&nbsp;&nbsp;<b><?=$nome;?></b><br />
					<input type="hidden" maxlength=30 size=30 name=nome value="<?=$nome;?>"> </div></td>
                </tr>
                <input maxlength=50 size=30 name=foto_pda value="<?=$foto_pda;?>" style=" font-family: Verdana; font-size: 10px; color: #FFFFFF; border-width: 0px; border-style: none;background-color: #FFFFFF;height:23px;width:360px;" readonly />
                <tr>
                  <td height="19" valign="top" bgcolor="#CCCCCC">
                    <div align="center"><strong>Comprador:</strong>&nbsp;&nbsp;</b><?=strtolower($comprador);?></b></div></td>
                </tr>
                <tr>
                  <td height="19" valign="top" bgcolor="#CCCCCC">
                    <div align="center">
                      <input type="hidden" maxlength=200 size=30 name=usuario value="<?=$vendedor;?>" class="button">
                      <input type="hidden" size=30 name=cod_prod value="<?=$id;?>"/>
					  <input type="hidden" size=30 name=prod_1 value="<?=$id_prod;?>"/>
					  <input type="hidden" size=100 name=vt_mail value="<?=$mail_des_2z;?>"/>
					  <input type="hidden" size=100 name=cod_vt_pord value="<?=$cod_prod;?>"/>
					  <input type="hidden" size=100 name=cop_mail value="<?=$mail_des_2;?>"/>
					  <input type="hidden" size=100 name=comprador value="<?=$comprador;?>"/>

</div></td>
                </tr>
                                
                <tr>
                  <td height="22" valign="top" bgcolor="#CCCCCC">
                    <div align="center"><strong>Digite sua Resposta:</strong></div></td>
                </tr>
                <tr>
                  <td height="15" valign="top" bgcolor="#CCCCCC">
                    <div align="center">
                    
                    
	<!-- Gets replaced with TinyMCE, remember HTML in a textarea should be encoded -->
	<textarea id="elm1" name="elm1" rows="15" cols="50" style="width: 550">Digite aqui sua Resposta...</textarea>
                   

</div></td>
                </tr>
                <tr>
                  <td height="19" valign="top" bgcolor="#CCCCCC">
                    <div align="center"></div></td>
                </tr>
            </table></td>
          </tr>
      </table></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align=center nowrap class=campo>
        <div align="center">
          <input type=submit  name=post value="Registrar Mensagem" style="background-color: #ffffff;"/>
          <input type="hidden" name="pai" value="<?=$pai;?>">
          <input type="hidden" name="topico" value="<?=$topico;?>">
      </div></td>
    </tr>
  </tbody>
</table>
</form>
<div align="center"></div>

    &nbsp;
	
	<!-- Fim do Layout -->

    <div align="center"></div>
    <div align="center"></div></td>
    <td width="7%"><div align="center"><img src="../graphics/px1.gif" width="10" height="10"></div></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center"><div align="center"><a href="javascript:history.go(-1);"><img src="../graphics/retorno.png" width="30" height="31" border="0"       /></a></div><br /></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>

<?
include('rodape.php');
?>