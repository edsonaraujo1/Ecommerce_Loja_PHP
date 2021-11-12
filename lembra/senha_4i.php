<?
/*
 -----------------------------------------
 Desenvolvido por...: Edson de Araujo
 Desenvolvido por...: Jean Carlos de Araujo
 
 Finalidade.........: Recupera Senha
 Criado em Data.....: 06/07/2009
 Ultima Atualização : 07/07/2009 

 DEUS SEJA LOUVADO
 -----------------------------------------
*/
include('aguarde.php');

include('titulo.php');

require_once("../config.php");

session_start();
$ser_name3_c    = escapestrings(strtoupper($_SESSION["log_name_c"]));
$acesso_2       = escapestrings($_SESSION['data_log_2']);


if (!empty($ser_name3_c)){

}else{
	$ser_name3_c = trim(strtoupper("Visitante"));
}


//require("../funcoes2.php");
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
if(document.Form1.palavra_sec.value=="")
{
//	alert("A Palavra secreta é Obrigatorio!");
//	return false;
}
else	
return true;	
}

// Valida email
function ValidaEmail()
{
  var obj = eval("document.Form1.mail_sec");
  var txt = obj.value;
  if ((txt.length != 0) && ((txt.indexOf("@") < 1) || (txt.indexOf('.') < 7)))
  {
    alert('Email nao e valido !!!');
	obj.focus();
  }
}
        
</script>


<body  style=" margin-left: 0px;  margin-top: 0px;  margin-right: 0px;  margin-bottom: 0px; "   bgcolor="#FFFFFF" >


<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr><td bgcolor="#FF9900"><table width="100%" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FDECDB"><img src="../graphics/px1.gif" width="15" height="14"/>
		<b><font color="#FF6600" face="Arial">Recuperação de Senha</font></b></td>
      </tr></table></td>
  </tr>
</table>

<br>
<body bgcolor='#FFFFFF'>
<center><font face=Tahoma><font size=4 color='#FF0000'><b>A T E N Ç Ã O</b></font><font size=2></center>
<center><b>Para Recuperação da sua senha digite seu e-mail cadastrado</b><br></center>
<center><b>no Portal e informe sua palavra secreta, você recebera um e-mail</b><br></center>
<center><b>com seu nome de Usuario e Senha.</b><br></center></font>


<form name="Form1" action="enviar.php" method="POST" onsubmit="return validaCampo(); return false;">
      <input type="hidden">
      <!-- e-mail do destinatario -->
      <center>
                                 
      <table width="39%" border="0" align="center" cellspacing="0" cellpadding="0">
             <tr> 
             <td><font face=Arial><b>Seu E-Mail :</b><br>
			    <input type="text" size="60" name="mail_sec" value="<?=$mail_des;?>" onblur="ValidaEmail()"></td>
             </tr>
             
             <tr>
             <td>
			 <br />
          <table width="235" border="0" align="center" cellspacing="0" bordercolor="#3399FF">
            <tr>
              <td width="530">
			  
			  <div >
                <div align="left"><img id="siimage" align="left" style="padding-right: 5px; border: 0" src="securimage_show.php?sid=<?php echo md5(time()) ?>" />
    
                  <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="19" height="19" id="SecurImage_as3" align="middle">
			            <param name="allowScriptAccess" value="sameDomain" />
			            <param name="allowFullScreen" value="false" />
			            <param name="movie" value="securimage_play.swf?audio=securimage_play.php&bgColor1=#777&bgColor2=#fff&iconColor=#000&roundedCorner=5" />
			            <param name="quality" value="high" />
			        
			        <param name="bgcolor" value="#ffffff" />
			            <embed src="securimage_play.swf?audio=securimage_play.php&bgColor1=#777&bgColor2=#fff&iconColor=#000&roundedCorner=5" quality="high" bgcolor="#ffffff" width="19" height="19" name="SecurImage_as3" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />                                    
			          </object>
    
                  
            
                  <!-- pass a session id to the query string of the script to prevent ie caching -->
                      <a tabindex="-1" style="border-style: none" href="#" title="Refresh Image" onclick="document.getElementById('siimage').src = 'securimage_show.php?sid=' + Math.random(); return false"><img src="../graphics/refresh.gif" alt="Reload Image" border="0" onclick="this.blur()" align="bottom" /></a>
                </div>
			  </div>
<div style="clear: both"></div>

			  &nbsp;</td>
            </tr>
          </table>   
		         
          <div align="center">
		  
		  <span class="style2">Codigo:</span><br />

          <!-- NOTE: the "name" attribute is "code" so that $img->check($_POST['code']) will check the submitted form field -->
          <input type="text" name="code" size="12" /><br/><br/>
          <input type="hidden" name="acao" value="logar"/>
			 
			 
			 </td>
			  
               
             </tr>
                <tr> 
                <td><center><input name="submit" type="submit" value=" Enviar " style=" background-color: #ffffff;"> 
                &nbsp; <input name="reset" type="reset" value=" Limpar " style=" background-color: #ffffff;"></td>
                </center> 
              </tr>
       </table>
</center>
</form>
<br />
<center><a href='../principal.php'><img src='../graphics/retorno.png' border='0' /></a></center>
<br />
</body>
</html>
<?
include('rodape.php');
?>