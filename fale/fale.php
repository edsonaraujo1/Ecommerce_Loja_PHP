<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Desenvolvido por...: Jean Carlos de Araujo
 
 Finalidade.........: layout do Sistema
 Criado em Data.....: 06/07/2009
 Ultima Atualização : 07/07/2009 

 DEUS SEJA LOUVADO
 -----------------------------------------
*/

include('aguarde.php');

include('titulo.php');

require_once("../config.php");

require("../funcoes2.php");

// Abre Conexão com o MySql
include("../conexao.php");
// Chama o Banco de Dados

$link = @mysql_connect($host,$user,$pass);

@mysql_select_db($db);

$consulta  = "SELECT * FROM tt_ser_01 WHERE login = '$ser_name3_c'";
					
$resultado = @mysql_query($consulta);
					
// Incrementa novo codigo
					
$row = @mysql_fetch_array($resultado);
					
$codigo 	= @$row["codigo"];             
$nome 		= trim(@$row["nome"])." ".trim(@$row["sobrenome"]);      		
$mail_des 	= @$row["e_mail"];

?>
<html >
<head>
<title><?=$Titulo;?></title>
<link rel="shortcut icon" href="../graphics/favicon.ico"/>

<style type="text/css">
<!--

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
if(document.Form1.email.value=="")
{
	alert("O Campo E-mail é Obrigatorio!");
	return false;
}
else
if(document.Form1.assunto.value=="Escolha o Assunto")
{
	alert("O Campo Assunto esta em Branco!");
	return false;
}
else
if(document.Form1.mensagem.value=="")
{
	alert("O Campo Mensagem esta em Branco!");
	return false;
}
else
if(document.Form1.nome1.value=="")
{
	alert("O Campo Nome é Obrigatorio!");
	return false;
}
else	
return true;	
}

// Valida email
function ValidaEmail()
{
  var obj = eval("document.Form1.email");
  var txt = obj.value;
  if ((txt.length != 0) && ((txt.indexOf("@") < 1) || (txt.indexOf('.') < 7)))
  {
    alert('Email incorreto');
	obj.focus();
  }
}
        
</script>

<?

echo "
<div style='top: 50%;left: 50%;position:absolute;'>

<script language=\'JavaScript\' type=\'text/javascript\'>

document.write('<div id=\"loadings\"><img src=\"../Sistema2/imagens/ajax-loader.gif\"></div>');

window.onload=function() {

document.getElementById(\"loadings\").style.display=\"none\";

}

</script></div>

";

?>


<body  style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFFFFF" onload="" >

<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr><td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"/>
		<b><font color="#FF6600" face="Arial">Fale Conosco</font></b></td>
      </tr></table></td>
  </tr>
</table>

<div align="center">
  <table width="100%" border="0">
    <tr>
      <td width="1%" height="469"><img src="../graphics/px1.gif" width="10" height="10"></td>
      <td width="97%"><div align="center">
        <table width="69%" border="0" align="center">
          <tr>
            <td width="172" valign="top"><div align="center"><img src="../graphics/enviar.jpg"  width="120"  height="120"  border="0" id="Image1" /></div></td>
            <td width="478" align="left" valign="top">
            <form name="Form1" action="enviar.php" method="POST" onsubmit="return validaCampo(); return false;">
                <div align="left">
                  <input name="hidden" type="hidden">
                  <!-- e-mail do destinatario -->
                  <table width="39%" border="0" align="left" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><div align="left"><b>Nome:</b><br>
                          <input type="text" size="60" name="nome1" value="<?=$nome;?>">
                      </div></td>
                    </tr>
                    <tr>
                      <td><div align="left"><b>E-mail:</b><br>
                          <input type="text" size="55" name="email" value="<?=$mail_des;?>" onblur="ValidaEmail()">
                      </div></td>
                    </tr>
                    <tr>
                      <td><div align="left"><b>Assunto:</b><br>
                            <select name="assunto" value="">
                              <option value="Escolha o Assunto"> Escolha o Assunto </option>
                              <option value="Sugest&otilde;es"> Sugest&otilde;es </option>
                              <option value="Criticas"> Criticas </option>
                              <option value="Problemas de Acesso"> Problemas de Acesso </option>
                              <option value="Opni&atilde;o sobre o Portal"> Opni&atilde;o sobre o Portal </option>
                              <option value="Reclama&ccedil;&atilde;o"> Reclama&ccedil;&atilde;o </option>
                              <option value="Denuncia"> Denuncia </option>
                              <option value="Web Masters"> Web Masters </option>
                              <option value="Outros"> Outros </option>
                              </select>
                      </div></td>
                    </tr>
                    <tr>
                      <td><div align="left"><b>Mensagem:</b><br>
                            <textarea cols="50" rows="10" name="mensagem"></textarea>
                      </div></td>
                    </tr>
                    <tr>
                      <td><div align="left"><br>
                          <input name="submit" type="submit" value=" Enviar " style=" background-color: #ffffff;">
&nbsp;
              <input name="reset" type="reset" value=" Limpar " style=" background-color: #ffffff;">
                      </div></td>
                    </tr>
                                                                        </table>
            </form>                                                                        
              </div></td></tr>
              
          <tr>
            <td>&nbsp;</td>
            <td align="left"><div align="left"></div></td>
          </tr>
        </table>
        <p><a href='../principal.php'><img src='../graphics/retorno.png' border='0' /></a></p>
        </div></td>
      <td width="2%"><img src="../graphics/px1.gif" width="8" height="10"></td>
    </tr>
  </table>
  </div>
<div align="left">&nbsp;    
<div align="center"></div>
</div>

</body>
</html>
<?
include('rodape.php')
?>