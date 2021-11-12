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
require_once("../config.php");

if ($entra_no_web1 == 'at2'){

session_start();
$ser_name3_c    = escapestrings(strtoupper($_SESSION["log_name_c"]));

require("../funcoes2.php");

// Abre Conexão com o MySql
include("../conexao.php");
// Chama o Banco de Dados

$link = @mysql_connect($host,$user,$pass)

    or die( require("../login.php"));

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



<body  style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFFFFF" >

<table width="100%" height="52" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="100%" background="../graphics/forum_baner.png"><span class="style19">&nbsp;&nbsp;Fale Conosco (iSysMP.com)</span></td>
            </tr>
</table>


<div align="left">&nbsp;
  <table width="661" border="0" align="center">
    <tr>
      <td width="137" valign="top"><img id="Image1" src="../graphics/enviar.jpg"  width="120"  height="120"  border="0" /></td>
      <td width="567" valign="top"><div align="center">
        <form name="Form1" action="enviar.php" method="POST" onsubmit="return validaCampo(); return false;">
          <input name="hidden" type="hidden">
          <!-- e-mail do destinatario -->
          <center>
            <table width="39%" border="0" align="center" cellspacing="0" cellpadding="0">
              <tr>
                <td><b>Nome:</b><br>
                    <input type="text" size="60" name="nome1" value="<?=$nome;?>"></td>
              </tr>
              <tr>
                <td><b>E-mail:</b><br>
                    <input type="text" size="55" name="email" value="<?=$mail_des;?>" onblur="ValidaEmail()"></td>
              </tr>
              <tr>
                <td><b>Assunto:</b><br>
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
                </td>
              </tr>
              <tr>
                <td><b>Mensagem:</b><br>
                    <textarea cols="50" rows="10" name="mensagem"></textarea>
                </td>
              </tr>
              <tr>
                <td><br>
                    <input name="submit" type="submit" value=" Enviar " style=" background-color: #ffffff;">
&nbsp;
          <input name="reset" type="reset" value=" Limpar " style=" background-color: #ffffff;"></td>
              </tr>
            </table>
          </center>
        </form>
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  
<div align="center"><a href='../principal.php'><img src='../graphics/retorno.png' border='0' /></a></div>
</div>

</body>
</html>
<?
}else{
	
	require("inew_undher_files.php");	
}
?>